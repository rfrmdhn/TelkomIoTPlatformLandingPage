<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Session;
use Illuminate\Http\Request;
use App\Library\Rest;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class FileController extends Controller
{
    public function index(Request $r, $id)
    {
        $path=request()->segments();
        unset($path[0]);
        $file=resource_path(implode("/",$path));

        if ( ! empty($file) && file_exists($file) && ! is_dir($file))
		{
			$mime = mime_content_type($file);
            $fileinfo =pathinfo($file);
            if($fileinfo['extension']=='css'){
                $mime="text/css";
            }
            
			$pathinfo = pathinfo($file);

			if ( ! $mime) 
			{
				if (preg_match("/\.(woff|eot|ttf|otf)$/", $file, $matches))
				{
					$ext = $matches[1];
					
					switch ($ext)
					{
						case 'woff': $mime = 'application/x-font-woff'; break;
						case 'eot': $mime = 'application/vnd.ms-fontobject'; break;
						case 'ttf': $mime = 'font/ttf'; break;
						case 'otf': $mime = 'font/otf'; break;
						default: $mime = 'application/octet-stream';
					}
				}
				else $mime = 'application/octet-stream';
			}

			if (filesize($file) == 0) exit();

			$lastmod = filemtime($file);
			$etag = md5_file($file);

			header('Cache-Control: max-age=84600');
			header('Content-Type: '.$mime);
			header('Content-Length: '.filesize($file));
			header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastmod)." GMT");
			header("Etag: ".$etag);

			if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $lastmod || @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag)
			{
				header("HTTP/1.1 304 Not Modified");
				exit();
			}

			print(file_get_contents($file));
		}
    }
}
