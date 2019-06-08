<!DOCTYPE html>

<html lang="pt-br">
  
<head>
  <title>Agência focada em Marketing Digital - Tática Web</title>
  
   <meta charset="utf-8">
   <meta name="description" content="A Agência Tática Web desenvolve Websites, SEO, AdWords, Social Media e fica localizada em Volta Redonda, no interior do Rio de Janeiro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Favico -->
    
  <link href="https://www.taticaweb.com.br/ico.png" rel="shortcut icon">
    
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <!-- Reset CSS -->
  
  <link rel="stylesheet" type="text/css" href="reset.css">
  
  
  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
  
  
  <!-- Swiper -->
    

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  
</head>
  
  
<body>
  
  <div class="container">
    
      
    <div class="a1">
        
      <div id="nav">
        <div id="logo">
            <img src="img/logo.png" alt="Logotipo Tática Web">
        </div>
        
        <div  id="menu">
            <ul>
              <li><a href="default.asp">Início</a></li>
              <li><a href="news.asp">Institucional</a></li>
              <li><a href="contact.asp">Contato</a></li>
            </ul>
        </div> 
      </div>  
          <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/banner.png" alt="Banner" style="max-width:80%;height:auto;">
            </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
          </div>
          <!-- Add Arrows -->
            <div class="arrow swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>    

        </div>
     
      
    </div>
      
      
      
      
      
    <div class="a2"> 
      <div id="t1">
        <div>
          <h2>Institucional</h2>
        </div>
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat magna quis enim vestibulum, porta ullamcorper nisi congue. Vestibulum faucibus, velit non placerat dignissim, ipsum tortor</p>
        </div>
          
        <a href="#nav"><button class="button button2">SAIBA MAIS</button></a>
          
      </div>
      
    
    </div>
      
      
    <div class="a3"> 
    
        <div id="t2">
            <h2>Fale com a gente</h2>
            <form method="POST" action="salva_mensagem.php" class="grid-container">
                <input class="item1" type="text" name="nome" alt="Nome Completo" role="Inserir nome completo" placeholder="NOME COMPLETO" required />
                
                <input class="item2" type="email" name="email" alt="Email" role="Inserir email" placeholder="EMAIL" required/>
                
                <input class="item3" type="tel" name="telefone" alt="Inserir Telefone" role="Inserir Telefone" placeholder="TELEFONE" />
                
                <input class="item4" type="text" name="assunto" alt="Assunto" role="Inserir um assunto" placeholder="ASSUNTO" />
                
                <textarea class="item5" type="text" name="mensagem" alt="Escrever Mensagem" role="Inserir uma mensagem" placeholder="MENSAGEM"></textarea>
                
                <a href="#"><button type="submit" value="Submit" class="button button2">ENVIAR MENSAGEM</button></a>
                
            </form>
            
            
        <footer>
          <div id="ft">    
            <a href="https://www.facebook.com/agenciataticaweb" target="_blank"><img src="img/fbook.png" style="width="40px";" height="40px;"></a>
                
            <a href="https://www.taticaweb.com.br/" target="_blank">Desenvolvido por Tática Web</a>
          </div>
        </footer>    
            
        </div>
      
      
      
    </div>
    
 
  
  </div>
  

  
  
  
  
  
  <!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
  
  <!-- Swiper Initialize -->
  
  <script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
  </script>
    
     
    
  
</body>
  
  
</html>