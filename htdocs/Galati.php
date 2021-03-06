<?php  
include_once 'databaseconnect.php';
session_start();  

if(isset($_POST["login"])){  
  if(empty($_POST["username"]) || empty($_POST["password"])){  
  echo '<script>alert("Both Fields are required")</script>';}  
  else {  
  $username = mysqli_real_escape_string($conn, $_POST["username"]);  
  $password = mysqli_real_escape_string($conn, $_POST["password"]);  
  $query = "SELECT * FROM accounts WHERE username = '$username'";  
  $result = mysqli_query($conn, $query);  
  if(mysqli_num_rows($result) > 0){  
  while($row = mysqli_fetch_array($result))  
  {  
  if(password_verify($password, $row["password"])){  
  //return true;  
  $_SESSION["username"] = $username;  
  header("location:entry.php");  }  
  else{  
  //return false;  
  echo '<script>alert("Wrong User Details")</script>';}}}  
  else{echo '<script>alert("Wrong User Details")</script>';}}}
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet"/>
    
    <title>Alba Iulia | Facultati</title>
    <link rel="icon" type="image/png" href="LogoTheHive.png">
    <link rel="stylesheet" href="css/bootstrap.css">
	
  <link rel="stylesheet" href="style_postcard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<style>/* width */
::-webkit-scrollbar {
    width: 10px;
   background-color: #ffd369;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    border-radius: 10px;
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #393E46; 
    border-radius: 10px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #222831; 
  }</style>

</head>
  <body style="
  background-image: url('BG.png');
  
                overflow-y:scroll;">
    

    <div class="nav-container">
        <nav>
            <ul class="mobile-nav">
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="link-logo"></a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </li>
                

                <li>
                    <a href="" class="link-bag"></a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </li>
            </ul>

            <ul class="desktop-nav">
                <li>
                    <a href="index.html" class="link-logo"></a>
                </li>
        
                <lit>
                    <a href="#">About</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="#">Contact</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="login.php">Login</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="register.php">Register</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                
               
                <li>
                    <a href="#" class="link-bag"></a>
                    
                </li>
            </ul>
        </nav>

        <!-- End of navigation menu items -->


   
    	<div class="overlay"></div>
    </div>
    <section class="dark">
	<div class="container-fluid" style="margin-left:18%;
                                      margin-right:-60%;">

		<h1 class="h1 text-center" id="pageHeaderTitle">FACULTATI ALBA IULIA</h1>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://www.math.ugal.ro/">Facultatea de Matematica si Informatica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul de Matematic?? Informatic?? face parte din Facultatea de ??tiin??e ??i Mediu a Universit????ii "Dun??rea de Jos" din Gala??i. Misiunea departamentului este de a transfera cunoa??tere c??tre societate prin formare ini??ial??, continu?? ??i prin cercetare ??tiin??ific??, construind capitalul intelectual al studen??ilor, dar ??i al cercet??torilor.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     IT</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     4 ani</li>
					<li class="tag__item play blue">
						<a href="http://www.math.ugal.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinta-si-ingineria-alimentelor">Facultatea de ??tiin??a ??i Ingineria Alimentelor</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de ??tiin??a ??i Ingineria Alimentelor se num??r?? printre cele mai prestigioase facult????i din cadrul Universit????ii ???Dun??rea de Jos??? din Gala??i, fiind recunoscut?? at??t la nivel na??ional, c??t ??i interna??ional, pentru performan??ele la nivel academic ??i ??n activitatea de cercetare, dezvoltare ??i inovare, fiind cea mai veche facultate de profil din ??ar??.  Facultatea de ??tiin??a ??i Ingineria Alimentelor ??i-a men??inut locul ??n elita facult????ilor existente ??n prezent Rom??nia, ca principal furnizor de educa??ie ??i cercetare ??n domeniul fundamental Ingineria produselor alimentare ??i domenii conexe (biotehnologie, nutri??ie, alimenta??ie public??, acvacultur??).</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinta-si-ingineria-alimentelor"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-de-economie-si-administrarea-afacerilor">Facultatea de Economie si Administrarea afacerilor</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Economie ??i Administrarea Afacerilor (FEAA) are privilegiul de a se fi ??ntemeiat pe fundamentul unei recunoscute tradi??ii a ??nv??????m??ntului economic g??l????ean, men??ion??nd c?? prima ??coal?? comercial?? din Rom??nia a fost ??nfiin??at?? la Gala??i ??n octombrie 1864, iar ??n anul 1934 lua fiin???? Academia de Export din Gala??i. ??ntr-un asemenea cadru s-au format dou?? mari personalit????i economice recunoscute la nivel interna??ional: profesorii Virgil Madgearu ??i Anghel Rugin??.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Economice</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-de-economie-si-administrarea-afacerilor"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-litere">Facultatea de Litere</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Litere din Universitatea ???Dun??rea de Jos???din Gala??i reprezint?? una dintre cele mai importante institu??ii cu profil filologic din Rom??nia, cu o tradi??ie de peste cincizeci de ani ??n organizarea programelor de studii universitare.
??n cadrul Facult????ii de Litere au fost acreditate ??i sunt organizate ??n prezent ??apte programe de licen????, cinci programe de masterat ??i studii de doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-litere"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://feaa.ugal.ro/specializari/licenta/finante-si-banci/">Facultatea de Finante Banci</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??i-ai f??cut m??car o dat?? planuri s?? ????i cumperi ceva, ??i a trebuit s?? str??ngi bani pentru asta? Sau ??i mai bine, ai luat vreodat?? un ???credit??? de la p??rin??i (gen, ni??te bani ??mprumut) scadent la primul salariu? Far?? s?? i??i dai seama, ai f??cut deja primii pa??i spre lumea fascinant?? a banilor, a conturilor de economii sau a creditelor de nevoi personale. ??nc?? pu??in ??i CFO poate fi noua ta titulatur??. ??tii ce ??nseamn???</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Business</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://feaa.ugal.ro/specializari/licenta/finante-si-banci/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/anunturi/stiri-si-evenimente/11-site/32-facultatea-de-ingineria-materialelor-si-a-mediului">Facultatea de Ingineria Materialelor ??i a Mediului</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Prin Ordinul ministrului ??nv??????m??ntului nr.7751/1990 s-a ??nfiin??at Facultatea de Metalurgie cu specializ??rile: Siderurgie, Turnarea metalelor, Deform??ri plastice ??i tratamente termice, av??nd ??n structura sa trei catedre: Metalurgie extractiv?? ??i tehnologia materialelor, Elaborarea ??i turnarea aliajelor, Deform??ri plastice ??i tratamente termice.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/anunturi/stiri-si-evenimente/11-site/32-facultatea-de-ingineria-materialelor-si-a-mediului"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="http://www.fmfgl.ro/">Facultatea de Medicin?? ??i Farmacie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Studiul medicinii la Universitatea "Dun??rea de Jos" a inceput la sfarsitul anilor '90 odat?? cu ??nfiintarea specializ??rii kinetoterapie ??i a specializ??rii de asisten???? medical??. 
      Coroborarea dintre traditia medical?? din aceasta zon?? si mediul academic, a avut ca rezultat fondarea Facult??tii de Medicin?? ??n anul 2004, prin decizia Guvernului Romaniei, ca o consecint?? necesar?? a importantei si a dezvolt??rii socio-economice a acestei zone.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="http://www.fmfgl.ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu">Facultatea de ??tiin??e si Mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de ??tiin??e ??i Mediu continu?? o tradi??ie de peste 50 de ani privind preg??tirea absolven??ilor de liceu ??n domeniul ??tiin??elor exacte ??i ale naturii (matematic??, fizic??, chimie ??i ??tiin??a mediului). ??n cadrul facult????ii sunt implementate programe de licen???? interdisciplinare: Matematic?? informatic??, ??tiin??a mediului, Chimie farmaceutic?? ??i Fizic?? medical??, care au continuitate prin programe de masterat ??i doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://www.fmfgl.ro/">Facultatea de Medicin?? ??i Farmacie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Studiul medicinii la Universitatea "Dun??rea de Jos" a inceput la sfarsitul anilor '90 odat?? cu ??nfiintarea specializ??rii kinetoterapie ??i a specializ??rii de asisten???? medical??. 
      Coroborarea dintre traditia medical?? din aceasta zon?? si mediul academic, a avut ca rezultat fondarea Facult??tii de Medicin?? ??n anul 2004, prin decizia Guvernului Romaniei, ca o consecint?? necesar?? a importantei si a dezvolt??rii socio-economice a acestei zone.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://www.fmfgl.ro/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>
	

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu">Facultatea de ??tiin??e si Mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de ??tiin??e ??i Mediu continu?? o tradi??ie de peste 50 de ani privind preg??tirea absolven??ilor de liceu ??n domeniul ??tiin??elor exacte ??i ale naturii (matematic??, fizic??, chimie ??i ??tiin??a mediului). ??n cadrul facult????ii sunt implementate programe de licen???? interdisciplinare: Matematic?? informatic??, ??tiin??a mediului, Chimie farmaceutic?? ??i Fizic?? medical??, care au continuitate prin programe de masterat ??i doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/relatii-internationale">Facultatea de Relatii Internationale</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Biroul de Cooperare interna??ional??, studen??i str??ini ??i extensiuni universitare ia parte ??n mod activ la politica de interna??ionalizare a Universit????ii ???Dun??rea de Jos??? din Gala??i, pe care Universitatea o promoveaz?? ??i dezvolt?? ??n mod constant. Interna??ionalizarea reprezint?? o prioritate a societ????ii contemporane ??i implicit a noastr??, tocmai de aceea  un rol important ??n dezvoltarea rela??iilor interna??ionale ??l reprezint?? activit????ile ??ntreprinse pentru cunoa??terea realit????ilor ??i tendin??elor din ??nv??????m??ntul superior rom??nesc, european ??i mondial prin participarea membrilor comunit????ii universitare la programe de dezvoltare, cercetare, inovare ??i manifest??ri ??tiin??ifice na??ionale ??i interna??ionale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/relatii-internationale"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala">Facultatea de Arhitectur?? Naval??</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Istoria ??nv??????m??ntului superior naval g??l????ean ??i implicit a Facult????ii de Arhitectur?? Naval?? ??ncepe ??n 1951, odat?? cu ??nfiin??area Institutului Mecano ??? Naval (HCM 1375/1950). Prin acest act, la Gala??i au fost a??ezate bornele solide ale singurei facult????i din Rom??nia care asigur?? preg??tirea tehnic?? superioar?? necesar?? cercet??rii, proiect??rii ??i construc??iei navelor ??i structurilor marine.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.fdsa.ugal.ro/index.php/ro/">Facultatea de Drept ??i ??tiin??e Administrative</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept ??i ??tiin??e Administrative din cadrul Universit????ii ???Dun??rea de Jos??? din Gala??i este o institu??ie de ??nv??????m??nt superior care ????i propune s?? se integreze activ ??n comunitatea academic?? at??t pe plan na??ional, c??t ??i european.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-inginerie">Facultatea de Inginerie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Inginerie ia na??tere prin Hot??r??rea Senatului 12/10.04.2014, ca urmare a Hot??r??rilor Consiliilor Facult????ii de Mecanic?? ??i Facult????ii de Ingineria Materialelor ??i a Mediului de a-??i uni eforturile pentru ??mbun??t????irea calit????ii actului educa??ional, cre??terea vizibilit????ii ??tiin??ifice a rezultatelor cercet??rilor, cre??terea gradului de interna??ionalizare ??i ??mbun??t????irea parteneriatului cu mediul socio-economic. Facultatea de Mecanic?? a fost ??nfiin??at?? prin H.C.M. nr. 14/9 ianuarie 1954, anterior func??ion??nd Institutul Tehnic Gala??i (H.C.M. nr. 2727/ 1953), urma??ul Institutului Mecano-Naval din Gala??i (H.C.M. nr. 1050/ 2 octombrie 1951). Facultatea de Metalurgie a fost ??nfiin??at?? prin ordinul ministrului ??nv??????m??ntului nr.7751/1990 iar ??ncep??nd cu anul universitar 2013-2014, prin HG 69/2013, facultatea ????i schimb?? denumirea ??n Facultatea de Ingineria Materialelor si a Mediului.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-inginerie"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica">Facultatea de Automatica,Calculatoare,Energie electrica si Electronica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Automatic??, Calculatoare, Inginerie Electric?? ??i Electronic?? a fost ??nfiin??at?? prin Hot??r??rea de Guvern HG. nr. 631 din 30/06/2010 publicat?? ??n Monitorul Oficial al Rom??niei, Partea I, Nr. 578 din 16/08/2010. Facultatea a luat fiin???? prin comasarea Facult????ii de ??tiin??a Calculatoarelor cu Facultatea de Inginerie Electric??. ??nfiin??area Facult????ii de Automatic??, Calculatoare, Inginerie Electric?? ??i Electronic?? se ??ncadreaz?? ??ntr-o evolu??ie care a ??nceput ??n anul 1990, an ??n care au fost ??nfiin??ate programe de studii ??n domeniul Automaticii, Ingineriei electrice ??i Ingineriei Electronice. Primul program de studii ??n domeniul Calculatoare a fost derulat ??ncep??nd din toamna anului 2000.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie">Facultatea de Istorie, Filosofie ??i Teologie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??nceputurile Facult????ii de Istorie, Filosofie ??i Teologie se plaseaz?? cu aproximativ trei decenii ??n urm??, ??n 1991 fiind deschis?? specializarea istorie-geografie, ??nlocuit?? din 1993 cu sec??ia istorie-filosofie. ??nv??????m??ntul teologic superior ??n cadrul Universit????ii ???Dun??rea de Jos??? din Gala??i (UDJG) dateaz?? tot din 1991, c??nd se constituia sec??ie de teologie-litere. P??n?? ??n 2004, specializ??rile aferente acestei structuri actuale au func??ionat ??n cadrul mai larg al Facult????ii de Litere, Istorie ??i Teologie.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport">Facultatea de Educa??ie Fizic?? ??i Sport</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Educa??ie Fizic?? ??i Sport a fost ??nfiin??at?? prin Hot??r??rea de Guvern HG. nr. 329 din 22/06/1998 publicat?? ??n Monitorul Oficial al Rom??niei, Partea I, Nr. 237 din 29/06/1998. ??nfiin??area catedrei de educa??ie fizic?? a avut loc ??n anul 1969 ??i a func??ionat ??n cadrul Institutului Pedagogic de 3 ani. ??n perioada 1990 ??? 1997 a func??ionat ??n cadrul Facult????ii de Litere ??i ??tiin??e.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


<!--







-->



		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-arte">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??nfiin??at?? ??n anul 2003, Facultatea de Arte are trei programe de studii de licen???? ??i unul de masterat:

Artele spectacolului  (Actorie) - licen???? ??? acreditat;
Interpretare muzical?? ??? canto ??? licen???? ??? acreditat;
Arte  plastice (Pictur??) ??? licen???? - acreditat;
Teatru muzical ??? masterat ??? acreditat;</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arte"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-transfrontaliera">Facultatea Transfrontalier?? de ??tiin??e Umaniste, Economice ??i Inginere??ti</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Cadrul favorabil ??nfiin????rii Facult????ii Transfrontaliere a fost creat printr-un lung ??ir de negocieri ??i documente care s-au semnat ??ntre Rom??nia ??i Republica Moldova, anterior anului 1998, an ??n care se na??te propriu-zis ideea ??nfiin????rii unei forme de ??nv??????m??nt transfrontalier:</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-transfrontaliera"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="http://www.dppd.ugal.ro/">Departamentul pentru Pregatirea Personalului Didactic</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Prin specificul s??u, D.P.P.D. are o misiune didactic?? ??i de cercetare ??tiin??ific?? ??n domeniul
preg??tirii personalului didactic, pentru promovarea unui ??nv??????m??nt modern, formativ, centrat pe
subiectul ??nv??????rii, adaptat la cerin??ele europene ??n domeniul programelor de formare psihopedagogic??
??i metodic??, orientat pragmatic c??tre nevoile reale ale societ????ii ??i priorit????ile actuale ale educa??iei.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="http://www.dppd.ugal.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://idd.ugal.ro/index.php/ro/">Departamentul de ??nva????m??nt la distan????</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Reducerea costurilor legate de chirie sau de ??ederea ??n localitatea unde studiaz??. Posibilitatea de a alege o program?? de studiu a unei ??coli dintr-o alt?? localitate, f??r?? a fi nevoie de relocare pentru a urma cursurile respective.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://idd.ugal.ro/index.php/ro/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>
	

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu">Facultatea de ??tiin??e si Mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de ??tiin??e ??i Mediu continu?? o tradi??ie de peste 50 de ani privind preg??tirea absolven??ilor de liceu ??n domeniul ??tiin??elor exacte ??i ale naturii (matematic??, fizic??, chimie ??i ??tiin??a mediului). ??n cadrul facult????ii sunt implementate programe de licen???? interdisciplinare: Matematic?? informatic??, ??tiin??a mediului, Chimie farmaceutic?? ??i Fizic?? medical??, care au continuitate prin programe de masterat ??i doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/relatii-internationale">Facultatea de Relatii Internationale</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Biroul de Cooperare interna??ional??, studen??i str??ini ??i extensiuni universitare ia parte ??n mod activ la politica de interna??ionalizare a Universit????ii ???Dun??rea de Jos??? din Gala??i, pe care Universitatea o promoveaz?? ??i dezvolt?? ??n mod constant. Interna??ionalizarea reprezint?? o prioritate a societ????ii contemporane ??i implicit a noastr??, tocmai de aceea  un rol important ??n dezvoltarea rela??iilor interna??ionale ??l reprezint?? activit????ile ??ntreprinse pentru cunoa??terea realit????ilor ??i tendin??elor din ??nv??????m??ntul superior rom??nesc, european ??i mondial prin participarea membrilor comunit????ii universitare la programe de dezvoltare, cercetare, inovare ??i manifest??ri ??tiin??ifice na??ionale ??i interna??ionale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/relatii-internationale"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala">Facultatea de Arhitectur?? Naval??</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Istoria ??nv??????m??ntului superior naval g??l????ean ??i implicit a Facult????ii de Arhitectur?? Naval?? ??ncepe ??n 1951, odat?? cu ??nfiin??area Institutului Mecano ??? Naval (HCM 1375/1950). Prin acest act, la Gala??i au fost a??ezate bornele solide ale singurei facult????i din Rom??nia care asigur?? preg??tirea tehnic?? superioar?? necesar?? cercet??rii, proiect??rii ??i construc??iei navelor ??i structurilor marine.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.fdsa.ugal.ro/index.php/ro/">Facultatea de Drept ??i ??tiin??e Administrative</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept ??i ??tiin??e Administrative din cadrul Universit????ii ???Dun??rea de Jos??? din Gala??i este o institu??ie de ??nv??????m??nt superior care ????i propune s?? se integreze activ ??n comunitatea academic?? at??t pe plan na??ional, c??t ??i european.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-inginerie">Facultatea de Inginerie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Inginerie ia na??tere prin Hot??r??rea Senatului 12/10.04.2014, ca urmare a Hot??r??rilor Consiliilor Facult????ii de Mecanic?? ??i Facult????ii de Ingineria Materialelor ??i a Mediului de a-??i uni eforturile pentru ??mbun??t????irea calit????ii actului educa??ional, cre??terea vizibilit????ii ??tiin??ifice a rezultatelor cercet??rilor, cre??terea gradului de interna??ionalizare ??i ??mbun??t????irea parteneriatului cu mediul socio-economic. Facultatea de Mecanic?? a fost ??nfiin??at?? prin H.C.M. nr. 14/9 ianuarie 1954, anterior func??ion??nd Institutul Tehnic Gala??i (H.C.M. nr. 2727/ 1953), urma??ul Institutului Mecano-Naval din Gala??i (H.C.M. nr. 1050/ 2 octombrie 1951). Facultatea de Metalurgie a fost ??nfiin??at?? prin ordinul ministrului ??nv??????m??ntului nr.7751/1990 iar ??ncep??nd cu anul universitar 2013-2014, prin HG 69/2013, facultatea ????i schimb?? denumirea ??n Facultatea de Ingineria Materialelor si a Mediului.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-inginerie"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica">Facultatea de Automatica,Calculatoare,Energie electrica si Electronica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Automatic??, Calculatoare, Inginerie Electric?? ??i Electronic?? a fost ??nfiin??at?? prin Hot??r??rea de Guvern HG. nr. 631 din 30/06/2010 publicat?? ??n Monitorul Oficial al Rom??niei, Partea I, Nr. 578 din 16/08/2010. Facultatea a luat fiin???? prin comasarea Facult????ii de ??tiin??a Calculatoarelor cu Facultatea de Inginerie Electric??. ??nfiin??area Facult????ii de Automatic??, Calculatoare, Inginerie Electric?? ??i Electronic?? se ??ncadreaz?? ??ntr-o evolu??ie care a ??nceput ??n anul 1990, an ??n care au fost ??nfiin??ate programe de studii ??n domeniul Automaticii, Ingineriei electrice ??i Ingineriei Electronice. Primul program de studii ??n domeniul Calculatoare a fost derulat ??ncep??nd din toamna anului 2000.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie">Facultatea de Istorie, Filosofie ??i Teologie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??nceputurile Facult????ii de Istorie, Filosofie ??i Teologie se plaseaz?? cu aproximativ trei decenii ??n urm??, ??n 1991 fiind deschis?? specializarea istorie-geografie, ??nlocuit?? din 1993 cu sec??ia istorie-filosofie. ??nv??????m??ntul teologic superior ??n cadrul Universit????ii ???Dun??rea de Jos??? din Gala??i (UDJG) dateaz?? tot din 1991, c??nd se constituia sec??ie de teologie-litere. P??n?? ??n 2004, specializ??rile aferente acestei structuri actuale au func??ionat ??n cadrul mai larg al Facult????ii de Litere, Istorie ??i Teologie.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport">Facultatea de Educa??ie Fizic?? ??i Sport</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Educa??ie Fizic?? ??i Sport a fost ??nfiin??at?? prin Hot??r??rea de Guvern HG. nr. 329 din 22/06/1998 publicat?? ??n Monitorul Oficial al Rom??niei, Partea I, Nr. 237 din 29/06/1998. ??nfiin??area catedrei de educa??ie fizic?? a avut loc ??n anul 1969 ??i a func??ionat ??n cadrul Institutului Pedagogic de 3 ani. ??n perioada 1990 ??? 1997 a func??ionat ??n cadrul Facult????ii de Litere ??i ??tiin??e.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>



	</div>


  
</section>
   		 <div class="container-md">
		</div>


    	<div class="intro">
      	<div class="intro-logo">
        <h1 class="hide">
          <span class="logo"><img class="logo-intro" src="LogoTheHive.png" alt="logo">
        </span>
          </h1>
      	</div>
    </div>
    <div class="slider"></div>



   


    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
          document.querySelectorAll(".object").forEach(function(move){
  
            var moving_value = move.getAttribute("data-value");
            var x = (e.clientX * moving_value) / 250;
            var y = (e.clientY * moving_value) / 250;
  
            move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
          });
        }
        </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


    <script src="./app.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>