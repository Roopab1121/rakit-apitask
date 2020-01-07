<!DOCTYPEhtml>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div id="root">
    <header>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid align-items-start px-xl-5">
            <div class="navbar-brand flex-fill w-100">
                <img src="rackit.png" width="31" height="63" padding-left="31" alt="logo">
            </div>
            <div class="flex-fill w-100 text-center">
                <span>
                    <img class="d-inline:block align-middle" src="call.svg" width=20 height=20>
                </span>
                <span class="dark" line-height="1.5">Kundeservice 51 52 00 50</span>
            </div>
            <ul class="nav navbar-nav w-100 justify-content font-weight-bold navbar-right">
                <li class="navbar-text pt-0 mr-3">
                    <select class="language">
                        <option>EN</option>
                        <option>NO</option>
                    </select>
                </li>
                <li class="navbar-text"><span>Admin</span></li>
                <li class="navbar-text"><span>Logg ut</span></li>
            </ul>
        </div>
    </nav>
    </header>
    <div class="container">
        <div class="row mb-3" >
            <div class="font-weight-normal " font-size="17px">
            <span>Hjem / Produckter</span>
            </div>
        </div>
    </div>
    <br>
    <section id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
            <h1><span><strong>Produkter</strong></span></h1>
            <p><span>Her finner du en oversikt og beskriver over alle våre
                 produkter og tjenester. Du kan videre se lagerstatus
                og priser.</span></p></div></div>
        </div>
    </section><br>
    <section id="products">
        <div class="container pro">
            <div class="row p-5">
                <h4><span>Produkter</span></h4>
            </div>
        </div>
    </section>
    <div/div id="content">
        <div class="container bd1">
            <ul class="nav nav-tabs nav-fill" >
                <li class="nav-item">
                    <a  href="#roopa" class="nav-link" data-toggle="tab"><strong class="listitem">Alarm</strong></a>
                </li>
                <li class="nav-item">
                        <a href="#Kamera1" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem">Kamera</strong></a>
                </li>
                <li class="nav-item">
                            <a href="#Velferd1" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem"> Velferd</strong></a>
                </li>
                <li class="nav-item">
                        <a href="#Automasjon" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem">Automasjon</strong></a>
                 </li>
                <li class="nav-item">
                            <a href="#NettverkogSkap" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem">Nettverk og Skap</strong></a>
                </li>
                <li class="nav-item">
                            <a href="#TVoglyd" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem">TV og lyd</strong></a>
                </li>
                <li class="nav-item">
                    <a href="#TVoglyd" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem">LED Belysning</strong></a>
        </li>
        <li class="nav-item">
            <a href="#TVoglyd" class="nav-link" data-toggle="collapse" data-target="accordianExample"><strong class="listitem">Diverse</strong></a>
</li>
            </ul>
        </div>
       <div class="container bd2">
            <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>  Varenavn</td>
                        <td>Varenummer</td>
                        <td>Larger</td>
                        <td>Pris</td>
                        <td>Status</td>
                    </tr>
                </thead></table><hr>
        <div id="roopa">          
    <?php
    $url = 'abru.json';
    $data = file_get_contents($url);
    $characters = json_decode($data);?>
<table>
    <tbody>
    <?php foreach ($characters as $character) {?>
        <div class="accordion" id="accordionExample">
                <div class="table">
                    <div class="row"></div>
                  <div class="table-header" id="headingOne">
        <tr>
        <td class="span"><a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="glyphicon glyphicon-chevron-down"></span></a><strong><?php echo $character->description . '<br>';?></strong> </td>
        <td class="span"><?php echo $character->inventoryNumber . '<br>'; ?></td>
       <td class="span"> <?php echo $character->defaultPrice.'<br>';?></td>
       <td> <?php echo '<br>'?></td>
       <td class="span"> <?php echo $character->status.'<br>';?></td>
       <td ><?php echo '<br>';?>
        </td>
        <td ><?php echo '<hr>';}?>
        </td>
       </div>
       <div><div class="row">
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="table-body">
                        <div class="col-lg-4">
                            <img src="09856563744.jpg" height="225" width="225">
            
                        </div>
                        <div class="col-lg-8">
                            <div class="col-lg-7">
                                <p>Skriv inn produktbeskrivelse<span class="glyphicon glyphicon-pencil"></span></p>
            
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn" onclick="window.location.href='wel.php'">Last opp fill</button>
                            </div></div></tr>
                        </div>
                    </div>
            </div></div></div></div>
    </tbody>
    </table>
    </div>
        </div>

        </div></div>
    </section>
    
</div>
</body>
</html>