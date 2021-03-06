<!DOCTYPE html>
<html lang="en">
<head>
    <title>Velkommen til Køge Kommune</title>
    <meta name='description' content="Køge kommune er et sted hvor du kan leve livet - hele livet. Her er der gode muligheder for at bo, leve og arbejde uanset alder.">
    <meta property="og:url"           content="http://studie.kaspr.dk/kk" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Velkommen til Køge Kommune" />
    <meta property="og:description"   content="Køge kommune er et sted hvor du kan leve livet - hele livet. Her er der gode muligheder for at bo, leve og arbejde uanset alder." />
    <meta property="og:image"         content="http://studie.kaspr.dk/kk/img/socialmedia.jpg" />

<?php include 'header.php';?>

<article class="gallery">
    <ul class="slideshow">
        <li>
            <figure>
                <img src="img/pas-bestilling.png" alt="Bestil tid til dit pas i dag">
                <figcaption>
                    <h2>Vi holder ekstra åbent i Køge til bestilling af pas</h2>
                    <p>Bestil eller forny dit pas i god tid inden din ferie. Husk at tjekke hvornår det udløber. Du skal bestille tid til at få et nyt pas. Det gør du ved at bruge vores selvbetjeningsløsning og logge på med dit nemID. Det er nemt, hurtigt og du kan betale via nettet. </p>
                    <a class="btn outline blue" href="<?php echo $pasurl; ?>">Bestil pas her</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="img/flyttecollage.png" alt="Husk at flytte din adresse">
                <figcaption>
                    <h2>Vidste du at du kan melde flytning online?</h2>
                    <p>Når du flytter hjemmefra, skal du skifte adresse. Du har pligt til senest fem dage efter flytningen at melde flytning til kommunen. Du kan sende en flyttemeddelelse til kommunen via selvbetjeningsløsningen "Anmeld flytning til folkeregistret". PostNord får automatisk besked om din nye adresse.</p>
                    <a class="btn outline blue" href="#">Meld flytning</a>
                </figcaption>
            </figure>
        </li>
    </ul>
    <a href="#kategorier" class="cirkel"></a>
</article>

<article id="kategorier" class="indexgridwrapper">
        <div class="indexgrid">
                <div class="item0"><h1>Hvad søger du efter?</h1></div>
                <div class="item1">
                        <a href="borgerservice"><img src="img/borgerservice.png" alt="icon for borgerservice"></a>
                        <a href="borgerservice"><h3>Borgerservice</h3></a>
                        <ul>
                                <li><a href="<?php echo $pasurl; ?>">Pas,</a></li>
                                <li><a href="#">NemID,</a></li>
                                <li><a href="#">Meld at du flytter,</a></li>
                                <li><a href="#">Kørekort,</a></li>
                                <li><a href="#">Sundhedskort,</a></li>
                        </ul>
                        <div class="sealle"><a href="/kk/borgerservice">SE ALLE</a></div>
                </div>
                <div class="item2">
                        <a href="#"><img src="img/sundhed-sygedom.png" alt="icon for sundhed-sygedom"></a>
                        <a href="#"><h3>Sundhed & Sygdom</h3></a>
                        <ul>
                                <li><a href="#">Misbrug,</a></li>
                                <li><a href="#">Sundhedstilbud,</a></li>
                                <li><a href="#">Pårørende,</a></li>
                                <li><a href="#">Begravelseshjælp,</a></li>
                                <li><a href="#">Afhængighed,</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item3">
                        <a href="#"><img src="img/job-uddannelse.png" alt="icon forjob-uddannelse"></a>
                        <a href="#"><h3>Job & Uddannelse</h3></a>
                        <ul>
                                <li><a href="#">Ledig,</a></li>
                                <li><a href="#">SU,</a></li>
                                <li><a href="#">Skoler,</a></li>
                                <li><a href="#">Økonomi,</a></li>
                                <li><a href="#">Nedsat arbejdsevne,</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item4">
                        <a href="#"><img src="img/bolig-byggeri.png" alt="icon for bolig og byggeri"></a>
                        <a href="#"><h3>Bolig & Byggeri</h3></a>
                        <ul>
                                <li><a href="#">Lokalplaner,</a></li>
                                <li><a href="#">Boliger,</a></li>
                                <li><a href="#">Byggetilladelser,</a></li>
                                <li><a href="#">Bredbåndsdækning,</a></li>
                                <li><a href="#">Skorstensfejning,</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item5">
                        <a href="#"><img src="img/placeholder-icon.png" alt="placeholder icon skal skiftes på live version"></a>
                        <a href="#"><h3>Børn, unge og familie</h3></a>
                        <ul>
                                <li><a href="#">Dagtilbud,</a></li>
                                <li><a href="#">Orlov & Barse</a></li>
                                <li><a href="#">Familieydelser,</a></li>
                                <li><a href="#">Parforhold & Ægteskab,</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item6">
                        <a href="#"><img src="img/placeholder-icon.png" alt="placeholder icon skal skiftes på live version"></a>
                        <a href="#"><h3>Kultur & Fritid</h3></a>
                        <ul>
                                <li><a href="#">Idræt,</a></li>
                                <li><a href="#">Oplevelser,</a></li>
                                <li><a href="#">Aftenskoler,</a></li>
                                <li><a href="#">Foreninger,</a></li>
                                <li><a href="#">Lokaler,</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item7">
                        <a href="#"><img src="img/placeholder-icon.png" alt="placeholder icon skal skiftes på live version"></a>
                        <a href="#"><h3>Miljø & Teknik</h3></a>
                        <ul>
                                <li><a href="#">Affald & Genbrug,</a></li>
                                <li><a href="#">Rottebekæmpelse,</a></li>
                                <li><a href="#">Parkering,</a></li>
                                <li><a href="#">Veje & Stier</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item8">
                        <a href="#"><img src="img/placeholder-icon.png" alt="placeholder icon skal skiftes på live version">
                        </a><a href="#" ><h3>Ældre</h3></a>
                        <ul>
                                <li><a href="#">Daghjem,</a></li>
                                <li><a href="#">Demenstilbud,</a></li>
                                <li><a href="#">Folkepension,</a></li>
                                <li><a href="#">Rådgivning</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
                <div class="item9">
                        <a href="#"><img src="img/placeholder-icon.png" alt="placeholder icon skal skiftes på live version"></a>
                        <a href="#"><h3>Personlig hjælp & støtte</h3></a>
                        <ul>
                                <li><a href="#">Handicap,</a></li>
                                <li><a href="#">Familiestøtte,</a></li>
                                <li><a href="#">Vold,</a></li>
                                <li><a href="#">Rådgivning,</a></li>
                        </ul>
                        <div class="sealle"><a href="#">SE ALLE</a></div>
                </div>
        </div>
</article>
<h2 class="latestnews">Seneste Nyheder</h2>
<article class="newsgrid">

        <div class="item1">
                <img src="img/nyhed1.jpg" alt="">
                <div class="newswrapper">
                        <h3>Storm på vej</h3>
                        <p>Tirsdag den 20. marts valgte Køge Byråd at arbejde videre med et kystsikringsprojekt, der dækker hele Køge Kommunes 11 km lange kystlinje.</p>
                </div>
                <a href="#" class="btn blue outline">Læs mere om stormen</a>
        </div>
        <div class="item2">
                <img src="img/nyhed2.jpg" alt="">
                <div class="newswrapper">
                        <h3>Nye Stier</h3>
                        <p>Solrød Kommune og Køge Kommune har anlagt en dobbeltrettet cykelsti fra rundkørslen ved Egedesvej/Nordhøj til Lille Skensved, herefter ad Naurbjergvej og Yderholmvej gennem Naurbjerg frem til Jersie.</p>
                </div>
                <a href="#" class="btn blue outline">Læs mere om de nye stier</a>
        </div>
        <div class="item3">
                <img src="img/nyhed3.jpg" alt="">
                <div class="newswrapper">
                        <h3>Åben hus</h3>
                        <p>Besøg Kirkestræde 20 i Køge. Danmarks ældste daterede bindingsværkshus. I dag er huset en del af børnebiblioteket og du kan besøge det.</p>
                </div>
                <a href="#" class="btn blue outline">Læs mere om åben hus</a>
        </div>

</article>

<div>

</div>


<?php include 'footer.php';?>
