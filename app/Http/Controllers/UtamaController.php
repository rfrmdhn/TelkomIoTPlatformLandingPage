<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Session;
use Illuminate\Http\Request;
use App\Library\Rest;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class UtamaController extends Controller
{
    public function index(Request $r)
    {
		// dd(request()->segments()[0]);

		$segments = request()->segments();
        $path=[];
        $path[0] = "home";
		if(isset($segments[0])) $path=explode("-",request()->segments()[0]);
		$view = "";
		$part="";
		$data = array();
		
		// $data['data'] = $this->rss();
		
    if($path[0]=='product'){
			unset($path[0]);
			$part="product";
			$view = implode("-",$path);
		}else if($path[0]=='usecase'){
			unset($path[0]);
			$part="usecase";
			$view = implode("-",$path);
		}else if($path[0]=='news' && $path[1]=='event'){
			$this->get_news(1);
			$result_news = $this->news();
			$data['data'] = $result_news['data'];
			$this->get_event(1);
			$result_events = $this->event();
			$data['event'] = $result_events['data'];
			$data['last_page_news'] = $result_news['last_page'];
			$data['last_page_events'] = $result_events['last_page'];
			$data['active_page_news'] = 1;
			$data['active_page_events'] = 1;
			$data['list_page_number_news'] = $this->pagination(1, $result_news['last_page']);
			$data['list_page_number_events'] = $this->pagination(1, $result_events['last_page']);
			return view("newsevent.index",$data);
		}else if($path[0]=='fetchnews'){
			$this->get_news($r['page']);
			$result_news = $this->news();
			$data['data'] = $result_news['data'];
			$data['last_page_news'] = $result_news['last_page'];
			$data['active_page_news'] = $r['page'];
			$data['list_page_number_news'] = $this->pagination($r['page'], $result_news['last_page']);
			return view("newsevent.news_data",$data);
		}else if($path[0]=='fetchevents'){
			$this->get_event($r['page']);
			$result_events = $this->event();
			$data['event'] = $result_events['data'];
			$data['last_page_events'] = $result_events['last_page'];
			$data['active_page_events'] = $r['page'];
			$data['list_page_number_events'] = $this->pagination($r['page'], $result_events['last_page']);
			return view("newsevent.events_data",$data);
		}else if($path[0]=='news'){
			$d = $this->getSpecificNews();
			if ($d==null){
				$this->get_news(1);
				$d = $this->getSpecificNews();
			}
			return view("newsevent.news",$d);
		}else if($path[0]=='event'){
			$d = $this->getSpecificEvents();
			if ($d==null){
				$this->get_event(1);
				$d = $this->getSpecificEvents();
			}
			return view("newsevent.event",$d);
		}else if($path[0]=='documentation'){
			$this->get_news(1);
			$result_news = $this->news();
			$data['data'] = $result_news['data'];
			return view('documentation',  $data);
		}else if($path[0]=='home'){
			$this->get_news(1);
			$result_news = $this->news();
			$data['data'] = $result_news['data'];
			return view('home',  $data);
		}else if($path[0]=='about'){
			return view('about');
		}else if($path[0]=='term' && $path[1]=='condition'){
			return view('termcondition');
		}else if($path[0]=='privacy' && $path[1]=='policy'){
			return view('privacypolicy');
		}
		
		if($view==""){
			return view("errors.404", $data);
		}else if(\View::exists($part.".".$view)){
			return view($part.".".$view);
		}else{
			return view("errors.404",  $data);
		}


		
		}

		public function getSpecificNews(){
			$d=array();
			$result_news = $this->news();
			foreach($result_news['data'] as $dt){
				if("news-".strtolower(str_replace(" ","-",$dt['title']))==request()->segments()[0]){
					$d['d']=$dt;
				}
			}
			return $d;
		}

		public function getSpecificEvents(){
			$d=array();
			foreach($this->event_detail() as $dt){
				if("event-".strtolower(str_replace(" ","-",$dt['title']))==request()->segments()[0]){
					$d['d']=$dt;
				}
			}
			return $d;
		}

		public function pagination($current_page, $last_page){
			$list_page_number = array();
			if ($last_page > 5){
				if ($current_page/$last_page > 0.5){
					$list_page_number[] = 1;
					$list_page_number[] = "...";
					if ($last_page-$current_page<3){
						for ($i = $last_page-3; $i <= $last_page; $i++){
							$list_page_number[]=$i;
						}
					} else{
						$list_page_number[] = $current_page-1;
						$list_page_number[] = $current_page;
						$list_page_number[] = $current_page+1;
						$list_page_number[] = $current_page+2;
					}
				}else{
					if ($current_page<4){
						for ($i = 1; $i <= 4; $i++){
							$list_page_number[]=$i;
						}
					}else{
						$list_page_number[] = $current_page-2;
						$list_page_number[] = $current_page-1;
						$list_page_number[] = $current_page;
						$list_page_number[] = $current_page+1;
					}
					$list_page_number[] = "...";
					$list_page_number[] = $last_page;
				}
			} else {
				for ($i = 1; $i <= $last_page; $i++){
					$list_page_number[]=$i;
				}
			}
			return $list_page_number;
		}
		
		public function get_news($page){
			$keyword="";
			$params = array(
							"keyword" => trim($keyword),
							"page" => $page,
							"limit" => "5",
							"order" => "desc",
							"order_by" => "date_posted"
					);
			$url = env('BASE_URL_MS_USER_MANAGEMENT') . "ms-general-info/list-and-search-news";
					$jsonData = Rest::post($url, $params);
			Session::put("news", $jsonData['data']['data']);
			Session::put("news_last_page", $jsonData['data']['last_page']);
			Session::save();
			// dd($jsonData);
		}



	public function news(){
		$data = array();
		foreach(Session::get('news') as $d){
			$d_news = array();
			$d_news['title']=$d['title'];
			$month_list = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
			$month = $month_list[date('m', strtotime($d['date_posted']))-1];
			$d_news['date']= $month."".date(' d, Y', strtotime($d['date_posted']));
			$preview_text = str_replace("<p>","",$d['preview_text']);
			$preview_text = str_replace("</p>","",$preview_text);
			$d_news['description']=$preview_text;
			$d_news['content']=$d['content'];
			$d_news['img']=env('ASSET_URL').$d['thumbnail'];
			$d_news['img']=$d['thumbnail'];
			$d_news['link']='news-'.strtolower(str_replace(" ","-",$d['title']));
			$data[]=$d_news;
		}
		// $data[]=array(
		// 	"title"=>"Telkom Jalin Kerja Sama dengan Amazon Web Services untuk Perkuat Posisi sebagai B2B IT Services Provider Terdepan di Indonesia",
		// 	"date"=>"September 05, 2022",
		// 	"description"=>"PT Telkom Indonesia (Persero) Tbk (Telkom) resmi menjalin kemitraan strategis dengan Amazon Web Services (AWS). Hal ini ditandai dengan kick off partnership antara kedua belah pihak pada kegiatan AWS Cloud Days 2022 di Hotel Ritz Carlton, Jakarta (1/9). Kemitraan strategis ini merupakan  upaya Telkom untuk mengakselerasi digitalisasi nasional dan mendukung percepatan solusi dan teknologi cloud computing kepada pelaku industri digital seperti startup, sektor swasta,  BUMN, dan institusi pemerintah.",
		// 	"content"=>"<p><strong>Jakarta, 5 September 2022 &ndash;&nbsp;</strong>&nbsp;PT Telkom Indonesia (Persero) Tbk (Telkom) resmi menjalin kemitraan strategis dengan Amazon Web Services (AWS). Hal ini ditandai dengan kick off partnership antara kedua belah pihak pada kegiatan AWS Cloud Days 2022 di Hotel Ritz Carlton, Jakarta (1/9). Kemitraan strategis ini merupakan&nbsp; upaya Telkom untuk mengakselerasi digitalisasi nasional dan mendukung percepatan solusi dan teknologi cloud computing kepada pelaku industri digital seperti startup, sektor swasta,&nbsp; BUMN, dan institusi pemerintah.</p>
		// 		<p>Sebagai digital telco sekaligus pengembang inovasi teknologi di tanah air dengan harapan mendukung terwujudnya kedaulatan digital Indonesia, Telkom menjalin kemitraan dengan AWS Indonesia yang memiliki visi sebagai the core of digital Indonesia melalui manusia dan teknologi. Dalam mewujudkan hal tersebut, kedua pihak berkomitmen untuk menyediakan akses teknologi dan solusi cloud, membangun pemberdayaan digital ekosistem Indonesia melalui berbagai program keterampilan, dan bersama-sama mengembangkan solusi yang dapat dan mempercepat transformasi digital TelkomGroup.</p>
		// 		<p>Sebagai bagian dari pilar inti go-to-market (GTM), Telkom menunjuk TelkomSigma sebagai pemimpin B2B Digital IT Services dan pengembang solusi layanan cloud TelkomGroup untuk bekerja sama dengan AWS dan mitranya dalam rangka mendukung percepatan solusi berbasis cloud computing untuk semua pelaku usaha di Indonesia.</p>
		// 		<p>Sebelumnya, Telkom telah menyuntikkan dana sebesar Rp2,59 Triliun kepada Telkomsigma pada April 2022 guna mempercepat kapabilitas dan kapasitas untuk melayani permintaan cloud yang berkembang pesat di Indonesia. TelkomSigma telah meningkatkan kapasitas dan kapabilitas cloud services dengan kemampuan untuk menyediakan cloud hybrid melalui kolaborasi strategis dengan mitra global. TelkomSigma sendiri telah terdaftar sebagai mitra AWS bersertifikat di Indonesia yang memungkinkannya dapat menyediakan layanan cloud computing AWS untuk memenuhi kebutuhan pelanggan.</p>
		// 		<p>Kebutuhan penyediaan layanan cloud AWS dari pelanggan melalui TelkomSigma untuk memperoleh layanan cloud yang andal dalam melayani kebutuhan transformasi digital mereka. Tentunya ini sejalan dengan visi TelkomSigma sebagai &ldquo;The Preferred Digital Transformation Partner.&rdquo;</p>
		// 		<p>&ldquo;Kemitraan strategis ini diharapkan dapat menyinergikan strategi go-to-market kami di mana AWS akan membawa Cloud Technology Leadership dan Telkom di sisi lain akan memberikan integrasi solusi pada cloud, keamanan siber &amp; konektivitas melalui TelkomSigma. Kami juga berharap kemitraan ini dapat mempercepat implementasi inisiatif strategis perusahaan, serta memastikan TelkomSigma dapat terus memimpin segmen pasar IT B2B di Indonesia,' ungkap Budi Setyawan Wijaya selaku Direktur Strategic Portfolio usai kick off partnership Telkom dan AWS di Jakarta.</p>
		// 		<p>Selanjutnya TelkomSigma juga terus mengembangkan kemampuan untuk mengelola cloud dengan AWS melalui peningkatan kemampuan sumber daya manusia ke tingkat yang lebih tinggi. Dalam pelaksanaannya, kemitraan strategis dan pembangunan berkelanjutan ini ditargetkan tercapai pada pertengahan tahun 2023, seiring dengan pertumbuhan bisnis cloud yang tumbuh secara berkelanjutan di Indonesia serta diprediksi akan mencapai Rp30,5 Triliun pada tahun 2023.</p>
		// 		<p><strong>Pengembangan Keterampilan Digital di Seluruh Indonesia</strong></p>
		// 		<p>Menurut studi Kementerian TIK, Indonesia membutuhkan 9 juta talenta digital berketerampilan tinggi pada tahun 2035, dengan spesialisasi di bidang AI, Big Data, Cloud Computing, Coding, Augmented Reality, Virtual Reality, dan Cyber ??Security. Untuk memenuhi permintaan akan lebih banyak keterampilan digital untuk mempercepat transformasi Indonesia, Telkom juga bekerja sama dengan AWS dalam membuat program pelatihan dan sertifikasi yang berfokus pada pengembangan keterampilan cloud dan inovasi.</p>
		// 		<p>AWS bekerja sama dengan organisasi Indonesia untuk membantu meruntuhkan hambatan guna membantu memecahkan tantangan keterampilan dan telah melatih lebih dari 300 ribu individu di Indonesia dengan keterampilan cloud sejak 2017. Untuk mempersiapkan generasi profesional berikutnya untuk karir cloud, dan untuk membangun beragam talenta tingkat pemula ke dalam angkatan kerja, AWS berkolaborasi dengan lembaga pendidikan tinggi, organisasi nirlaba, organisasi pengembangan tenaga kerja, pemerintah, dan pengusaha, seperti Kementerian Pendidikan dan Kebudayaan Indonesia, dan Dicoding, perusahaan rintisan pendidikan teknologi lokal, pada berbagai program peningkatan keterampilan digital. AWS juga menawarkan lebih dari 500 kursus pelatihan digital gratis, tersedia bagi siapa saja yang ingin belajar dan memiliki koneksi internet, dengan lebih dari 200 kursus tersedia dalam Bahasa Indonesia.</p>
		// 		<p>&ldquo;Seremoni penandatanganan hari ini dengan Telkom menunjukkan komitmen kami untuk mendukung Indonesia bertransformasi secara digital,&rdquo; kata Gunawan Susanto, Country Manager Indonesia AWS. &ldquo;AWS tetap fokus untuk mendukung pelanggan dan mitra kami di Indonesia dengan terus membangun komunitas mitra yang kuat, mendukung pelanggan baru menggunakan AWS, memperkenalkan lebih banyak produk dan layanan kepada pelanggan kami, dan membantu membangun kumpulan talenta digital yang kuat di kawasan ini,&rdquo; tambah Gunawan Susanto.</p>
		// 		<p>Kerja sama antara Telkom dengan AWS ini merupakan bagian dari upaya Telkom mendukung ekonomi digital Indonesia untuk mencapai visi Indonesia Emas 2045 yang telah dicanangkan oleh Presiden Jokowi.</p>
		// 		<p>&nbsp;</p>
		// 		<p><strong>#DigitalBisa</strong></p>
		// 		<p><strong>#UntukIndonesiaLebihBaik</strong></p>",
		// 	"img"=>"https://telkom.co.id/data/image_upload/news/1662432112316_compress_FOTO%201.jpg",
		// 	"link"=>"news-telkom-jalin-kerja-sama-dengan-amazon-web-services-untuk-perkuat-posisi-sebagai-b2b-it-services-provider-terdepan-di-indonesia"
		// );
		// $data[]=array(
		// 	"title"=>"ITDRI Jalin Kemitraan Internasional dengan Massachusetts Institute of Technology - Industrial Liaison Program",
		// 	"date"=>"Agustus 30, 2022",
		// 	"description"=>"Arus perkembangan teknologi saat ini menyebar dengan cepat dan semakin luas.  Alhasil, keberadaan teknologi semakin berpengaruh terhadap kehidupan masyarakat. Di Indonesia sendiri saat ini sedang berfokus untuk mengakselerasi transformasi digital melalui pembentukan digital talent. Melihat fenomena tersebut, PT Telkom Indonesia (Persero) Tbk (Telkom) melalui Indonesia Telecommunication & Digital Research Institute (ITDRI) resmi menjalin partnership internasional di Massachusetts Institute of Technology-Industrial Liaison Program (MIT-ILP), United States di ranah Joint Learning, Innovation, dan Research.",
		// 	"content"=>"<p><strong>Jakarta, 30 Agustus 2022 &ndash;&nbsp;</strong>&nbsp;Arus perkembangan teknologi saat ini menyebar dengan cepat dan semakin luas.&nbsp; Alhasil, keberadaan teknologi semakin berpengaruh terhadap kehidupan masyarakat. Di Indonesia sendiri saat ini sedang berfokus untuk mengakselerasi transformasi digital melalui pembentukan digital talent. Melihat fenomena tersebut, PT Telkom Indonesia (Persero) Tbk&nbsp;(Telkom) melalui Indonesia Telecommunication &amp; Digital Research Institute (ITDRI) resmi menjalin partnership internasional di Massachusetts Institute of Technology-Industrial Liaison Program (MIT-ILP), United States di ranah Joint Learning, Innovation, dan Research.</p>
		// 		<p>MIT merupakan institut teknologi terbaik dunia yang sukses melahirkan banyak penelitian, pengetahuan, inovasi, dan alumni yang berpengaruh pada perkembangan teknologi di dunia. Tak hanya itu, mereka juga memiliki perpustakaan, laboratorium, jurnal&nbsp; teknologi terlengkap di dunia dengan fasilitas yang dapat diakses secara virtual maupun&nbsp; offline. Melihat keselarasan MIT dengan misi Telkom-ITDRI yaitu tempat untuk mengembangkan serta mencetak digital talent berstandar global, maka hubungan internasional Telkom-ITDRI di MIT-ILP diharapkan dapat memenuhi kebutuhan berbagai pihak dalam menyusun learning journey bagi para calon digital talent yang sesuai dengan kebutuhan industri secara global.</p>
		// 		<p>Menyambut kedatangan perwakilan MIT, Chairman of ITDRI Jemy V. Confindo mengungkapkan ITDRI berinisiatif menjalin hubungan dengan Penta-Helix yang isinya adalah pemerintah, mitra bisnis, akademi, tech provider, dan komunitas. Tidak hanya Penta-Helix Indonesia, tetapi juga Penta-Helix dari seluruh dunia salah satunya adalah MIT yang telah diakui dan terbukti sebagai universitas terkemuka di dunia.</p>
		// 		<p>&ldquo;Untuk mencapai visi dan misi ITDRI dalam lingkup Research, Learning, dan Innovation,&nbsp;kerja sama dengan MIT yang merupakan salah satu universitas terbaik di bidang teknologi dan inovasi ini diharapkan dapat membuka peluang serta akses yang diperlukan untuk meningkatkan kapabilitas ITDRI baik dari sisi expert, penyiapan talent maupun research and innovation management.&nbsp; Kolaborasi ITDRI dan MIT diharapkan bisa mengakselerasi kesiapan para inovator dalam memecahkan pain problems, mengusulkan solution idea serta menyiapkan inovasinya agar siap melalui tahapan-tahapan validasi menuju Go To Market atau Go To Operation,&rdquo; jelas Jemy.</p>
		// 		<p>Selaras dengan Jemy, Coordinator Group of Learning Expert, Innovator &amp; Researcher ITDRI, Muhammad Subhan Iswahyudi sangat menghargai start point ini dan berharap partnership ini menjadi lebih besar dan bisa lebih mengoptimalkan peluang bersama MIT. &ldquo;Kami akan menyediakan fasilitas untuk mengakses sumber-sumber MIT berdasarkan partnership IoT. Saya percaya akan memiliki peluang untuk berdiskusi dengan para Profesor dari MIT, peluang mentoring, akses ke database, akses ke artikel, dan sebagainya. Tidak hanya itu saja, kami juga ingin memiliki lebih banyak peluang di masa depan yang tidak hanya mencakup penelitian, tetapi juga pilar-pilar ITDRI lainnya seperti Pilar Pembelajaran dan pilar inovasi,&rdquo; terang Subhan.</p>
		// 		<p>Menghadiri acara seremonial tersebut, Prof. Chuan Zhang Tang sebagai Program Director MIT-ILP mengaku sangat bahagia atas sambutan Telkom dan ITDRI untuk menjadi anggota program industri MIT.</p>
		// 		<p>&ldquo;Saya pernah ke Indonesia beberapa kali dan benar-benar saya bisa merasakan semangat dan getaran ekonomi di negara ini. Banyak potensi ekonomi yang besar untuk berinovasi secara luas di negara yang indah ini. Saya sangat berharap Anda sukses besar dan saya berharap MIT dapat menjadi mitra dalam perjalanan Anda ke masa depan,&rdquo; harapnya.</p>
		// 		<p>&nbsp;</p>
		// 		<p><strong>#DigitalBisa</strong></p>
		// 		<p><strong>#UntukIndonesiaLebihBaik</strong></p>",
		// 	"img"=>"https://telkom.co.id/data/image_upload/news/1661849818603_compress_Foto.jpg",
		// 	"link"=>"news-itdri-jalin-kemitraan-internasional-dengan-massachusetts-institute-of-technology---industrial-liaison-program"
		// );
		// $data[]=array(
		// 	"title"=>"Hasil karya Digital Talent Telkom-ITDRI, YCC kini Hadir di Witel Sorong",
		// 	"date"=>"September 29, 2022",
		// 	"description"=>"Dalam rangka pengimplementasian Yakes Care Corner (YCC) di seluruh TREG, kini YCC sudah hadir di Papua. RIM-ITDRI yang khusus bertanggung jawab mengembangkan telemedicine YCC telah merampungkan proses instalasinya di Kota Sorong, Papua Barat. Proses instalasi dimulai pada Minggu 25 September dan selesai Kamis 29 September 2022.",
		// 	"content"=>"<p>Dalam rangka pengimplementasian Yakes Care Corner (YCC) di seluruh TREG, kini YCC sudah hadir di Papua. RIM-ITDRI yang khusus bertanggung jawab mengembangkan&nbsp;<em>telemedicine</em>&nbsp;YCC telah merampungkan proses instalasinya di Kota Sorong, Papua Barat. Proses instalasi dimulai pada Minggu 25 September dan selesai Kamis 29 September 2022. Selain instalasi, ada kegiatan lain yang menyertai, yaitu&nbsp;<em>transfer knowledge</em>&nbsp;dan sosialisasi, Kamis (29/9).</p>
		// 		<p>Tentu saja, data yang dihasilkan di YCC Sorong ini sudah diintegrasikan dan muncul di&nbsp;<em>dashboard</em>&nbsp;Telkom IoT Platform. Paling menarik saat sosialisasi karena melibatkan 29 yang merupakan personel Witel Sorong dan pensiunan Telkom.</p>
		// 		<p>Personel Witel Sorong menyatakan kepuasannya dan sangat berharap YCC terus beroperasi sehingga kesehatan mereka bisa termonitor dengan baik. Jika merujuk pada respon awal, YCC diyakini akan sangat bermanfaat di masa depan.</p>",
		// 	"img"=>"https://itdri.id/uploads/NEWS/Highlight/News 220929-1 Yakes.jpg",
		// 	"link"=>"news-hasil-karya-digital-talent-telkom-itdri,-ycc-kini-hadir-di-witel-sorong"
		// );
		// $data[]=array(
		// 	"title"=>"Telkom ITDRI Gandeng IEEE Perluas Jaringan Kemitraan Penta-Helix",
		// 	"date"=>"Agustus 08, 2022",
		// 	"description"=>"Memasuki pertengahan kuartal tiga tahun ini, ITDRI terus memperluas jaringan kemitraannya dalam lingkup Penta-Helix. Demi menggencot pencetakan digital talent yang dapat bersaing secara global, kali ini ITDRI menggandeng Institute of Electrical and Electronics Engineers (IEEE) Indonesia Section untuk mengembangkan kerjasama akademik dan juga pendidikan. Jalinan ikatan itu ditandai dengan penandatanganan Memorandum of Understanding (MoU) yang akan dilaksanakan di Telkom Corporate University, Bandung, Sabtu (6/8).",
		// 	"content"=>"<p>Memasuki pertengahan kuartal tiga tahun ini, ITDRI terus memperluas jaringan kemitraannya dalam lingkup Penta-Helix. Demi menggencot pencetakan&nbsp;<em>digital talent&nbsp;</em>yang dapat bersaing secara global, kali ini ITDRI menggandeng Institute of Electrical and Electronics Engineers (IEEE) Indonesia Section untuk mengembangkan kerjasama akademik dan juga pendidikan. Jalinan ikatan itu ditandai dengan penandatanganan&nbsp;<em>Memorandum of Understanding (MoU)&nbsp;</em>yang akan dilaksanakan di Telkom Corporate University, Bandung, Sabtu (6/8).</p>
		// 		<p>Dalam Nota Kesepahaman kedua belah pihak tersebut membahas antara lain untuk memperoleh hasil riset serta inovasi mengenai teknologi dari para ahli global, memperoleh dukungan program pembelajaran serta sertifikasi. Selain itu atas kerjasama ini akan diadakan magang industri bagi mahasiswa demi mendukung program Merdeka Belajar, Kampus Merdeka (MBKM) yang diusung pemerintah.</p>
		// 		<p>Turut hadir Chair of Institute of Electrical and Electronics Engineers (IEEE) Indonesia Section, Wahyudi Hasbi dalam kegaitan ini untuk menyampaikan sambutannya. Wahyudi berharap dengan penandatanganan MoU ini tidak hanya IEEE dan ITDRI saja yang mendapatkan keuntungan, tetapi kolaborasi ini akan membantu pembangunan ekonomi Negara Indonesia.<br><br>&ldquo;Kita semua berharap dengan adanya implementasi dari MoU ini akan meningkatkan peran member IEEE kalangan profesional, akademisi, pemerintahan dan juga para mahasiswa dalam mewujudkan akses telekomunikasi yang lebih berkeadilan menjembatani&nbsp;<em>digital divide</em>, meningkatkan kemampuan dan literasi masyarakat untuk menggunakan teknologi secara lebih adaptif dan juga turut mendorong penggunaan internet yang lebih produktif serta memperkuat pertumbuhan ekonomi nasional,&rdquo; papar Wahyudi.</p>
		// 		<p>Tentunya SGM Telkom CorpU &amp; Chairman of ITDRI Jemy V Confido juga hadir dan menyambut rekan-rekan IEEE, Jemy beranggapan kolaborasi yang akan dijalin merupakan sebuah makna yang sangat besar mengingat industri revolusi 4.0 dan berharap kerjasama ini dapat membawakan banyak kebermanfaatan.</p>
		// 		<p>&ldquo;Tentunya ini satu langkah yang sangat besar maknanya bagi kami di Telkom-ITDRI dan harapannya juga bagi di IEEE karena dengan kerjasama yang dijalin antara Telkom-TDRI dan IEEE maka kita membuka satu jalinan baru yang akan bisa dimanfaatkan untuk kebersamaan baik dibidang&nbsp;<em>learning</em>,&nbsp;<em>research</em>&nbsp;maupun&nbsp;<em>innovation</em>&nbsp;serta tentunya memenuhi harapan dari Bapak Presiden maupun masyarakat Indonesia secara umum yang memang saat ini menghadapi tantangan dari&nbsp;<em>industrial revolution 4.0</em>&nbsp;dan secara lebih spesifik dari&nbsp;<em>digital distraction</em>&nbsp;yang memang sudah tidak bisa kita pungkiri lagi,&rdquo; tutur Jemy pada sambutannya.</p>
		// 		<p>Dalam Nota Kesepahaman yang ditandatangani ini memiliki tujuh ruang lingkup utama yaitu:</p>
		// 		<p>1. Identifikasi peluang kerja sama riset dan inovasi melalui pengumpulan informasi tentang kemampuan sumber daya riset masing-masing pihak termasuk dari anggota IEEE maupun Telkom-ITDRI;</p>
		// 		<p>2. Kunjungan, dan partisipasi dosen, peneliti, tenaga profesional, dan mahasiswa yang menjadi anggota IEEE di berbagai bidang pendidikan, penelitian dan pengabdian masyarakat;</p>
		// 		<p>3. Melaksanakan magang industri bagi mahasiswa anggota Pihak Kedua untuk mendukung program pemerintah yaitu MBKM (Merdeka Belajar, Kampus Merdeka);</p>
		// 		<p>4. Eksplorasi dan eksploitasi atas kerja sama&nbsp;<em>partnership&nbsp;</em>untuk peluang komersialisasi atas hasil riset dan inovasi;</p>
		// 		<p>5. Sesi&nbsp;<em>sharing&nbsp;</em>berupa pertukaran standar informasi (pertukaran pengetahuan), dan publikasi yang terindeks.</p>
		// 		<p>6. Pemberdayaan program pembelajaran dan program sertifikasi melalui bantuan&nbsp;<em>review&nbsp;</em>dari pihak kedua;</p>
		// 		<p>7. Program kolaboratif lainnya yang saling menguntungkan bagi Para Pihak.</p>
		// 		<p>Dari kegiatan ini, tentunya diharapkan tidak hanya menguntungkan kedua pihak, tetapi diharapkan kolaborasi ini dapat membantu banyak pihak dalam industri bisnis dan bangsa Indonesia. (Vicky/Red01)</p>",
		// 	"img"=>"https://itdri.id/uploads/NEWS/Highlight/News%20220808-1%20IEEE%20(1).jpg",
		// 	"link"=>"news-telkom-itdri-gandeng-ieee-perluas-jaringan-kemitraan-penta-helix"
		// );
		// $data[]=array(
		// 	"title"=>"ITDRI Hadirkan Inovasi: Bertani Digital dengan Smart Farming",
		// 	"date"=>"Mei 11, 2022",
		// 	"description"=>"Pertanian merupakan salah satu sektor yang masih memiliki potensi untuk berkembang lebih jauh lagi dari hulu ke hilir. Berdasarkan potensi yang ada saat ini, pertanian juga bisa digitalisasi. ITDRI menghadirkan suatu inovasi di sektor pertanian bernama Smart Farming, Selasa (11/5).",
		// 	"img"=>"https://itdri.id/uploads/NEWS/Highlight/News 220511.jpeg",
		// );
		$results = array();
		$results['data'] = $data;
		$results['last_page'] = Session::get('news_last_page');
		return $results;
	}

	public function get_event($page){
		$keyword="";
		$params = array(
            "keyword" => trim($keyword),
            "is_active" => "yes",
            "page" => $page,
            "limit" => "5",
            "order" => "desc",
            "order_by" => "date_posted"
        );
		$url = env('BASE_URL_MS_USER_MANAGEMENT') . "ms-general-info/list-and-search-event";
        $jsonData = Rest::post($url, $params);
		Session::put("event", $jsonData['data']['data']);
		Session::put("events_last_page", $jsonData['data']['last_page']);
		Session::save();

	}

	public function event(){
		// dd(Session::get('event'));
		$data=array();
		foreach(Session::get('event') as $d){
			$month_list = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
			$day_start = date('d', strtotime($d['date_event_start']));
			$day_end = date('d', strtotime($d['date_event_end']));
			$month = $month_list[date('m', strtotime($d['date_event_end']))-1];
			$year = date('Y', strtotime($d['date_event_end']));
			if ($day_start != $day_end) {
				$d['date']= $day_start." - ".$day_end." ".$month." ".$year;
			}else{
				$d['date']= $day_end." ".$month." ".$year;
			}
			$d['link']='event-'.strtolower(str_replace(" ","-",$d['title'])) ;
			$d['img']=env('ASSET_URL').$d['path_photo_cover'];
			$data[]=$d;
		}
		// $data[]=array(
		// 	"title"=>"Peningkatan Kompetensi Mahasiswa Pada Pemanfaatan Platform Internet of Things",
		// 	"date"=>"September 30, 2022",
		// 	"img"=>"images/e1.png",
		// 	"location"=>"Hotel Grand Legi Lombok",
		// 	"link"=>"event-peningkatan-kompetensi-mahasiswa-pada-pemanfaatan-platform-internet-of-things",
		// );
		// $data[]=array(
		// 	"title"=>"Focus Group Discussion, Survey, & Usability Test Bersama RIM TCUC, Agree Poultry, dan ITB Stikom Bali",
		// 	"date"=>"September 28, 2022",
		// 	"img"=>"images/e2.png",
		// 	"location"=>"Denpasar, Bali",
		// 	"link"=>"event-focus-group-discussion,-survey,-&-usability-test-bersama-rim-tcuc,-agree-poultry,-dan-itb-stikom-bali",
		// );
		// $data[]=array(
		// 	"title"=>"Ceremony PoC & Implementasi Smart PJU Gresik",
		// 	"date"=>"September 14, 2022",
		// 	"img"=>"images/e3.png",
		// 	"location"=>"Gresik, Jawa Timur",
		// 	"link"=>"event-ceremony-poc-&-implementasi-smart-pju-gresik",
		// );
		$results = array();
		$results['data'] = $data;
		$results['last_page'] = Session::get('events_last_page');
		return $results;
	}

	public function event_detail(){
		// dd(Session::get('event'));
		$data=array();
		foreach(Session::get('event') as $d){
			$month_list = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
			$day_start = date('d', strtotime($d['date_event_start']));
			$day_end = date('d', strtotime($d['date_event_end']));
			$month_start = $month_list[date('m', strtotime($d['date_event_start']))-1];
			$month_end = $month_list[date('m', strtotime($d['date_event_end']))-1];
			$year_hour_start = date('Y H:i', strtotime($d['date_event_start']));
			$year_hour_end = date('Y H:i', strtotime($d['date_event_end']));
			$d['date']=$day_start." ".$month_start." ".$year_hour_start." - ".$day_end." ".$month_end." ".$year_hour_end;
			$d['link']='event-'.strtolower(str_replace(" ","-",$d['title'])) ;
			$d['img']=$d['path_photo_cover'];
			$data[]=$d;
		}
		return $data;
	}

	public function rss(){
		$url = "https://iotbusinessnews.com/feed/";
		// $url = "https://www.iotforall.com/feed";

        $rss = simplexml_load_file($url);
		$i=0;
		$data=array();
		foreach ($rss->channel->item as $item) {
			if($i<4){
				$tmp=array();
				$description = (string) $item->description; //Description
				// $description = preg_replace("/<img[^>]+\>/i", "(image) ", $description); 
				// dd($description);
				$html = $description;
				$doc = new \DOMDocument();
				@$doc->loadHTML($html);
				$tags = $doc->getElementsByTagName('img');
				if($tags->length>0){
					$tmp['img']=$tags[0]->getAttribute('src');
				}
	
				$tmp['title']= (string) $item->title;
				$tmp['link']= (string) $item->link;
				$tmp['description']= strip_tags($description);
				$tmp['date']=(string) $item->pubDate;
				$data[]=$tmp;
			}
			$i++;
		}
		// dd($data);
		return $data;

	}
}
