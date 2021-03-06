<html lang="pt-br">

@component('componentes.cabecalho')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent

<body class="" id="inicio">

    @component('componentes.menu')
        
    @endcomponent

    <div class="backslideshow">
        <div class="mascara d-flex justify-content-center flex-row flex-wrap align-content-center" >

            <div class="row d-flex justify-content-center" style=" text-align: center">
                <div class="col-md-8">
                    <h6>Um projeto para a ajudar quem ajuda</h6>
                <h1>
                    SEJA MAIS UM INFLUENCIADOR DA SOLIDARIEDADE
                </h1>

                <a href="" class="btn btn-azul" style="padding: 20px 30px;">Participe</a>
                </div>
            </div>
        </div>
    </div>
    <div class="branca" style="background-color: white; padding: 50px">
        <div class="container">
            <div class="row" style="margin-bottom: 15px">
                <div class="col-md-12">
                    <h1>Projetos</h1>
                    <div style="background-color: rgb(20, 69, 155); width: 100%; height: 3px;"></div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px">
                <div class="col-md-6 img-legenda-container mt-2 mb-2">
                    <div class="caption-imagem">
                        <img src="https://source.unsplash.com/random/420x254" class="img-fluid"/>
                    
                        <div class="texto-caption">
                            <h2>Nome Projeto</h2>
                            <a href="">Saiba mais</a>
                        </div>
                    </div>
                    <div class="legenda-imagem">
                        <h4>Legenda</h4>
                        <p>
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor
                        </p>
                    </div>
                </div>
                <div class="col-md-6 img-legenda-container mt-2 mb-2">
                    <div class="caption-imagem">
                        <img src="https://source.unsplash.com/random/420x254" class="img-fluid"/>
                    
                        <div class="texto-caption">
                            <h2>Nome Projeto</h2>
                            <a href="">Saiba mais</a>
                        </div>
                    </div>
                    <div class="legenda-imagem">
                        <h4>Legenda</h4>
                        <p>
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <a href="" class="btn btn-azul">Ver Todos +</a>
                </div>
            </div>
        </div>
    </div>
    @component('componentes.rodape')
        
    @endcomponent


    @component('componentes.scripts')
    <script>
        let imgList = [
            "{{ asset('img/2.jpg') }}",
            "{{ asset('img/3.jpg') }}",
        ];
        $(".backslideshow").backgroundSlideshow({
            images: imgList,
            //delay: 3000
            //transitionDuration: 5000
            fixed:true
        });
        $(".texto-caption").hide();
        $(".caption-imagem").hover(function(){
            $(this).find(".texto-caption").fadeIn('slow');
        },function(){
            $(this).find(".texto-caption").fadeOut('slow');
        });

        
    </script>
    @endcomponent

</body>

</html>
