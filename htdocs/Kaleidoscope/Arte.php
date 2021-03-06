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
    
    <title>ARTE | Facultati</title>
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

		<h1 class="h1 text-center" id="pageHeaderTitle">FACULTATI DE ARTE</h1>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="https://uav.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976764590501273631/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://design.uav.ro/">Facultatea de Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Specializarea Design a fost ??nfiin??at?? pentru prima dat?? ??n cadrul Facult????ii de ??tiin??e Umaniste ??i Sociale ??n anul 2008, prin H.G. 467/24.VI. 2008, iar din anul 2010 a devenit istitu??ie independent??. Facultatea de Design din cadrul Universit????ii "Aurel Vlaicu" din Arad ??i-a ??nceput activitatea ??n fostul Palat al Serelor din Gr??di??te, proiectat de renumitul arhitect al Aradului, Milo?? Cristea, una din cele mai frumoase cl??diri ale univerist????ii a fost renovat??, reabilitat?? ??i amenajat?? pentru ca studen??ii s?? ????i desf????oare activitatea ??n atelierele ??i s??lile de curs oferite de aceast?? cl??dire. </div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://design.uav.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://usarb.md/">
				<img class="postcard__img" src="https://victorius170881.github.io/assets/images/usarb-meta.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://usarb.md/facultatea-de-stiinte-ale-educatiei-psihologie-si-arte/">Facultatea de ??tiin??e ale Educa??iei, Psihologie ??i Arte,</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">1958 fondarea sec??iei ?????nv??????m??nt primar ??i cant???

1959 crearea specialit????ilor ?????nv??????tor de limba rom??n?? ??i  cant???, ?????nv??????tor de limba francez??  ??i cant???, ?????nv??????tor de limba rus?? ??i cant???.

1960 transferarea facult????ii ,,??nv??????m??nt primar??? la Institutul Pedagogic din B??l??i ca rezultat al comas??rii Institutului Pedagogic din Chi??inau cu Universitatea de Stat

1960 fondarea primei subdiviziuni de specialitate ??? Catedra de Muzica ??i Cant

1966 reorganizarea facult????ii ?????nv??????m??nt primar??? ??n facultatea ,,Pedagogie??? care avea ca elemente structurale catedrele ???Pedagogie, psihologie ??i metodica ??nv??????m??ntului primar???, ???Muzic?? ??i cantul???.

1968 deschiderea Facult????ii ??nv??????m??nt Primar., crearea a dou?? catedre: Cant ??i Metodica Cantului ??i Muzica..</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    3 ani</li>
					<li class="tag__item play red">
						<a href="https://usarb.md/facultatea-de-stiinte-ale-educatiei-psihologie-si-arte/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://unitbv.ro/">
				<img class="postcard__img" src="https://www.unitbv.ro/images/stiri_si_evenimente/2020/evenimente/02/1_Martie_pentru_site.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://muzica.unitbv.ro/ro/">Facultatea de Muzica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Muzic??
are ca priorit????i cultivarea excelen??ei ??n activitatea de crea??ie ??i interpretare artistic??, completate, ??n ultimii ani, de un program de masterat consacrat func??iei terapeutice a muzicii. Prin performan??ele studen??ilor s??i ??i prin integrarea bogatei tradi??ii muzicale a Bra??ovului, facultatea a devenit ??n timp un pol artistic al ora??ului.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://muzica.unitbv.ro/ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://unitbv.ro/">
				<img class="postcard__img" src="https://www.unitbv.ro/images/stiri_si_evenimente/2020/evenimente/02/1_Martie_pentru_site.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://dpm.unitbv.ro/ro/">Facultatea de Design de produs ??i mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Design de produs ??i mediu
este una dintre cele mai noi facult????i ale Universit????ii ??i ofer?? programe de studii moderne, orientate spre lansarea de produse novatoare ??i speciali??ti ??n domenii ??ntr-o continu?? dezvoltare, precum ingineria medical?? sau energiile regenerabile.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://dpm.unitbv.ro/ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.ugal.ro/facultati/facultatea-de-arte">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??i-ai f??cut m??car o dat?? planuri s?? ????i cumperi ceva, ??i a trebuit s?? str??ngi bani pentru asta? Sau ??i mai bine, ai luat vreodat?? un ???credit??? de la p??rin??i (gen, ni??te bani ??mprumut) scadent la primul salariu? Far?? s?? i??i dai seama, ai f??cut deja primii pa??i spre lumea fascinant?? a banilor, a conturilor de economii sau a creditelor de nevoi personale. ??nc?? pu??in ??i CFO poate fi noua ta titulatur??. ??tii ce ??nseamn???</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arte"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://unatc.ro/devunatc/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976776763281641512/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://unatc.ro/devunatc/">Universitatea Na??ional?? de Art?? Teatral?? ??i Cinematografic?? ???I.L. Caragiale???</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Universitatea Na??ional?? de Art?? Teatral?? ??i Cinematografic?? ???I.L. Caragiale??? din Bucure??ti (UNATC) este o institu??ie public?? de ??nv??????m??nt superior finan??at?? de stat, recunoscut?? pe plan interna??ional. Prin programele sale, care pun accentul pe cercetare, inova??ie, diversitate ??i interdisciplinaritate, Universitatea le ofer?? studen??ilor oportunitatea de a se specializa ??n domeniul teatrului ??i ??n cel al filmului, precum ??i ??n domenii mixte, la nivel de licen????, master ??i doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    3 ani</li>
					<li class="tag__item play red">
						<a href="https://unatc.ro/devunatc/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		



    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://unarte.org/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976777844128632902/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://unarte.org/fap/">Facultatea de Arte Plastice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul Pictur?? a fost unul dintre pilonii fundamentali pe care s-a construit de-a lungul istoriei sale ??ndelungate ??nv??????m??ntul artistic academic din Bucure??ti, r??m??n??nd ??i ast??zi una dintre cele mai importante catedre ale Universit????ii Na??ionale de Arte.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://unarte.org/fap/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>
	

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://unarte.org/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976777844128632902/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://unarte.org/fadd/">Facultatea de Arte Decorative si Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??n urma str??daniilor profesorului arhitect Paul Bortnovschi, ??n anul 1969 a luat na??tere, ??n cadrul Facult????ii de Arte Decorative, sec??ia de Estetica Formelor Industriale, care pe parcursul anilor se va dezvolta, ??n conformitate cu necesit????ile sociale, p??n?? la formula acual??.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://unarte.org/fadd/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://unarte.org/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976777844128632902/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://unarte.org/fita/">Facultatea de Istoria si Teoria Artei</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul nostru propune o educa??ie pluridisciplinar??, racordat?? la ??nnoirile metodologice ale contextului interna??ional, ??n vederea unei dezvolt??ri complexe ??i echilibrate a viitorilor speciali??ti ??i a bunei lor integr??ri ??n cadrul pie??ei de munc??, ??in??ndu-se cont de cerin??ele contemporaneit????ii. Pentru a spori prestigiul academic al departamentului, dar ??i ??n vederea atragerii de fonduri extrabugetare, am demarat proiecte de cercetare coordonate de titulari ai catedrei,  cuprinz??nd, ??n cadrul echipelor de cercetare, masteranzi ??i doctoranzi.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://unarte.org/fita/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.unmb.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976779373304746004/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fim/">Facultatea de Interpretare Muzical??</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Interpretare Muzical?? reprezint?? inima Universit????ii Na??ionale de Muzic?? din Bucure??ti. Vreme de peste un secol ??i jum??tate, pulsa??ia acestui organism de prim?? importan???? al ??nv??????m??ntului muzical superior din Rom??nia a f??cut posibil?? afirmarea ??i consacrarea unor muzicieni de valoare, recunoscu??i pe plan na??ional ??i interna??ional: soli??ti, arti??ti instrumenti??ti ??i arti??ti lirici, care au atins un ??nalt nivel de performan???? interpretativ??, dar au ob??inut ??n egal?? m??sur?? ??i competen??e didactice.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fim/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.unmb.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976779373304746004/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.fdsa.ugal.ro/index.php/ro/">Facultatea de Drept ??i ??tiin??e Administrative</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept ??i ??tiin??e Administrative din cadrul Universit????ii ???Dun??rea de Jos??? din Gala??i este o institu??ie de ??nv??????m??nt superior care ????i propune s?? se integreze activ ??n comunitatea academic?? at??t pe plan na??ional, c??t ??i european.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.unmb.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976779373304746004/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fcmpm/">Facultatea de Compozi??ie, Muzicologie ??i Pedagogie muzical??</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??n cei peste 150 de ani de existen???? ai institu??iei, Facultatea de Compozi??ie, Muzicologie ??i Pedagogie muzical?? (FCMPm), parte integrant?? a Universit????ii Na??ionale de Muzic?? din Bucure??ti, s-a impus prin calitatea actului educativ, artistic ??i ??tiin??ific, caracteriz??ndu-se prin permanenta deschidere c??tre nou ??i, totodat??, prin transmiterea valorilor perene ??i a criteriilor viabile de selec??ie a acestora.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fcmpm/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.spiruharet.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976781177992130580/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://ssu-b.spiruharet.ro/pm">Facultatea de Muzic??</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">  Facultatea de ??tiin??e Socio-Umane ????i impune adaptarea continu?? ??i eficient?? la standardele academice na??ionale ??i europene, promov??nd o educa??ie bazat?? pe ??tiin????, comunicare ??i atenta ??ndrumare a studen??ilor ??i a masteranzilor, ??ncuraj??nd performan??ele individuale ??i ideile inovatoare, av??nd grija moderniz??rii spa??iilor educa??ionale ??i a pachetelor de beneficii oferite celor direct implica??i ??n procesul de predare-??nv????are (cadre universitare, studen??i ??i masteranzi), ??n vederea asigur??rii unei form??ri, care s?? poat?? combina cu u??urin???? partea practic?? cu cea teoretic??, studen??ii ??i masteranzii av??nd ??ansa de a r??spunde provoc??rilor domeniului studiat chiar ??n timpul perioadei de studiu, acest lucru av??nd ??n vedere facilitarea ??ncadr??rii lor ulterioare pe pia??a muncii. ??n acest sens, Facultatea de ??tiin??e Socio-Umane are ca misiune principal?? formarea de speciali??ti ??n domeniul ??tiin??elor comunic??rii, ??n cel al muzicii, precum ??ia ??n alte domenii din aria ??tiin??elor socio-umane.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      4 ani</li>
					<li class="tag__item play green">
						<a href="https://ssu-b.spiruharet.ro/pm"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.uad.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976782618928500796/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.uad.ro/structura/facultati/arte_plastice/">Facultatea de Arte Plastice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Arte Plastice include 5 departamente ??i se ghideaz?? ??n activitate dup?? Regulamentul propriu de organizare ??i func??ionare.
Consiliul facult????ii - forul de conducere al acestei structuri academice - ????i desf????oar?? activitatea conform Regulamentului propriu de organizare ??i func??ionare.

Hot??r??rile consiliului facult????ii sunt implementate de decan, prodecan ??i directorii de departamente.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.uad.ro/structura/facultati/arte_plastice/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.uad.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976782618928500796/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.uad.ro/structura/facultati/arte_decorative/">Facultatea de Arte Decorative ??i Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Arte Decorative ??i Design include 5 departamente ??i se ghideaz?? ??n activitate dup?? Regulamentul propriu de organizare ??i func??ionare.
Consiliul facult????ii - forul de conducere al acestei structuri academice - ????i desf????oar?? activitatea conform Regulamentului propriu de organizare ??i func??ionare.
Hot??r??rile consiliului facult????ii sunt implementate de decan, prodecan ??i directorii de departamente.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.uad.ro/structura/facultati/arte_decorative/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


<!--







-->



		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.univ-ovidius.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976783272271044689/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://arte.univ-ovidius.ro/">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">La ini??iativa unui grup de cadre didactice ale Liceului de Arte ??i cu largul concurs al conducerii Universit????ii ???Ovidius???din Constan??a, al prof. univ. dr. Adrian Bavaru ??n calitate de Rector, ??n anul 1997 se fac primele demersuri ??n scopul punerii bazelor ??nv??????m??ntului superior artistic const??n??ean. ??n cadrul Departamentului de Arte, subordonat direct Rectoratului universit????ii, ??n anul 1998, specializ??rile Pedagogie muzical??, Canto ??i Teatru primesc aviz de func??ionare din partea C.N.E.A.A., iar odat?? cu Ordinul Ministerului Educa??iei Na??ionale nr. 3478/26.03.1998 acestea completeaz?? fericit paleta domeniilor ??i specializ??rilor Universit????ii ???Ovidius???. ??n 1999, oferta educa??ional?? a Departamenului de Arte se completeaz?? cu Artele plastice ??i decorative, iar trei ani mai t??rziu (2002) Departamentul devine Facultate de Arte.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://arte.univ-ovidius.ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.uaic.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976784126743035924/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.arteiasi.ro/?page_id=486">Facultatea de Teatru</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??n domeniul Teatru, misiunea facult????ii este de a oferi absolven??ilor celor dou?? specializ??ri Artele spectacolului (direc??ii de studii: Actorie, Arta actorului m??nuitor de p??pu??i ??i marionete, Regie, Coregrafie) ??i Teatrologie ??? Jurnalism Teatral programe de studiu bazate pe cercetarea interdisciplinar?? ??i care s?? permit?? atingerea competen??elor profesionale ??n domeniul crea??iei teatrale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.arteiasi.ro/?page_id=486"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.uaic.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976784126743035924/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.arteiasi.ro/?page_id=543">Facultatea de Arte Vizuale ??i Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">??n luna ianuarie 2020 ??ntre Facultatea de Arte Vizuale ??i Design ??i firma Gemini CAD Systems a fost ??ncheiat un Acord de parteneriat ??n cadrul programului GAIN (Gemini Academic Initiative), ??n urma c??ruia laboratorul specializ??rii Mod?? ??? Design vestimentar a fost ??ntregit cu licen??e software Gemini CAD pentru Fashion&Apparel ??i echipament complet (sistem de calcul ??i cutter plotter) care ofer?? studen??ilor posibilitatea de a-??i transpune proiectele la un nivel performant.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.arteiasi.ro/?page_id=543"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.uaic.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976784126743035924/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.arteiasi.ro/?page_id=640">Facultatea de Interpretare, Compozi??ie ??i Studii Muzicale Teoretice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Structura actual?? a facult????ii reune??te ramurile istorice ale dezvolt??rii muzicii, latura artistic?? ??? interpretativ?? ??i componistic?? ??? cu zona teoretic??, muzicologic??, ??ntr-un format contemporan. Astfel, pe trunchiul tradi??ional al instruc??iei instrumentale ??i vocale se al??tur??, pe linie interpretativ??, specializarea Dirijat cor ??i orchestr??, de asemenea, Muzica religioas?? ??i direc??ia Compozi??ie jazz ??i muzic?? u??oar??, av??nd componente interpretative fundamentale. De partea cealalt??, ??n aria studiilor teoretice, Muzicologia ??i unul dintre domeniile sale, Pedagogia muzical??, se completeaz?? cu sec??iunea de cercetare bizantinologic?? din cadrul specializ??rii Muzic?? religioas??. Compozi??ia (clasic??) se situeaz??, ??n consecin????, ca un domeniu autonom, cu puternice leg??turi at??t cu zona interpret??rii c??t ??i cu cea a teoriei muzicale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.arteiasi.ro/?page_id=640"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>



        <article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.uoradea.ro/Universitatea+din+Oradea">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975823869137018920/976788133100277780/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://arte.uoradea.ro/ro/">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Scopul nostru este ca, prin inovare pedagogic??, cercetare academic??, rela??ii interna??ionale, parteneriate cu mediul de afaceri, burse de internship ??i activit????i extracurriculare, s?? fim cea mai bun?? alegere pentru ca tu:

- s?? ????i ??mbun??t????e??ti abilit????ile
- s?? ob??ii o calificare
- s?? ????i dezvol??i o carier??
- s?? ????i schimbi alegerea profesional??
- s?? te autodep????e??ti
- s?? ????i g??se??ti locul de munc?? visat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://arte.uoradea.ro/ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.uoradea.ro/Universitatea+din+Oradea">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975823869137018920/976788133100277780/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://arte.uoradea.ro/ro/departamentul-muzica">Facultatea de Muzica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul Muzic?? din cadrul Facult????ii de Arte asigur?? prin programele de studiu de licen???? ??i cele de master preg??tirea fundamental?? ??i de specialitate a studen??ilor no??tri. Obiectivul nostru principal este formarea de arti??ti muzicieni bine preg??ti??i care s?? poat?? concura cu succes cu absolven??ii institu??iilor de ??nv??????m??nt universitar similare din Rom??nia, la momentul integr??rii pe pia??a muncii.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://arte.uoradea.ro/ro/departamentul-muzica"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		

		



	

	

  









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