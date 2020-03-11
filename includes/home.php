<div class="s1 d-flex justify-content-center align-items-center">
    <div class="card-home card rounded-0">
        <div class="card-body text-center p-5">
            <h1>Bienvenue sur</h1>
            <img src="./img/codespace-nobg.png" alt="Logo CodeSpace" width="80%" class="bg-white rounded"><br><br><br>
            <h5>Développeurs web, e-commerce et application.</h5><br>
            <h5>Nous répondons à vos besoins pour toutes vos demandes de création de site web ainsi que de dépannage informatique.</h5><br>
            <h5>Contactez nous pour plus d'informations.</h5>
        </div>
        <button type="button" class="btn btn-info btn-home" id="test"><i class="fas fa-envelope"></i></button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    $("#test").hover(function(){
        $("btn-home").animate({
            height: '125px',
            width: '125px'
        });
        $("btn-home i").animate({
            top: '40px',
            left: '40px'
        });
    }); 
</script>