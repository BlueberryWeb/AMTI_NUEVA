function GDL(){
    document.getElementById('GDL').style.display = 'block';
    document.getElementById('MTY').style.display = 'none';
    document.getElementById('CDMX').style.display = 'none';
}
function MTY(){
    document.getElementById('GDL').style.display = 'none';
    document.getElementById('MTY').style.display = 'block';
    document.getElementById('CDMX').style.display = 'none';
}
function CDMX(){
    document.getElementById('GDL').style.display = 'none';
    document.getElementById('MTY').style.display = 'none';
    document.getElementById('CDMX').style.display = 'block';
}
//CARROUSEL DE OPINIONES
let x = 0;
let p = -10;
let i = 1;
let doom = document.getElementsByClassName('item');
let confr = (doom.length - 3)*(-350);
let confl = 0;
//left
document.getElementById("l").addEventListener("click", function(){
       x += 350;
       if (x > confl){x = confr - 350}else{
    document.getElementById("move").style.marginLeft = x + "px";}
});
//right
document.getElementById("r").addEventListener("click", function(){
    x += -350;
    p += -10;
    if (x < confr){x = 350}else{
    document.getElementById("move").style.marginLeft = x + "px";}
});
//CAMBIAR IMAGEN CON EL HOVER
window.addEventListener('load', elige, false);
function elige() {      
    var imagen = document.getElementById('elige');
    imagen.addEventListener('mouseover', peligro_elige, false);
    imagen.addEventListener('mouseout', restaurar_elige, false);
}
function restaurar_elige(){
    var imagen = document.getElementById('elige').src = "img/elige.png";
}
function peligro_elige() {
    var imagen = document.getElementById('elige').src = "img/elige.gif";
}
//COMPLETA
window.addEventListener('load', completa, false);
function completa() {      
    var imagen = document.getElementById('completa');
    imagen.addEventListener('mouseover', peligro_completa, false);
    imagen.addEventListener('mouseout', restaurar_completa, false);
}
function restaurar_completa(){
    var imagen = document.getElementById('completa').src = "img/completa.png";
}
function peligro_completa() {
    var imagen = document.getElementById('completa').src = "img/completa.gif";
}
//PAGA
window.addEventListener('load', pago, false);
function pago() {      
    var imagen = document.getElementById('pago');
    imagen.addEventListener('mouseover', peligro_pago, false);
    imagen.addEventListener('mouseout', restaurar_pago, false);
}
function restaurar_pago(){
    var imagen = document.getElementById('pago').src = "img/paga.png";
}
function peligro_pago() {
    var imagen = document.getElementById('pago').src = "img/paga.gif";
}

//ENVIO     
window.addEventListener('load', envio, false);
function envio() {      
    var imagen = document.getElementById('envio');
    imagen.addEventListener('mouseover', peligro_envio, false);
    imagen.addEventListener('mouseout', restaurar_envio, false);
}
function restaurar_envio(){
    var imagen = document.getElementById('envio').src = "img/envio.png";
}
function peligro_envio() {
    var imagen = document.getElementById('envio').src = "img/envio.gif";
}
/* RECAPTCHA */
$('#form').submit(function (event) {
    event.preventDefault();
    /*Cambia 6LcbFlUgAAAAAFBHhpCJzpPXLhCeLN-79qSDpVFD por tu clave de sitio web*/
    grecaptcha.ready(function () {
        grecaptcha.execute('6LcbFlUgAAAAAFBHhpCJzpPXLhCeLN-79qSDpVFD', { action: 'registro' }).then(function (token) {
            $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
            $('#form').prepend('<input type="hidden" name="action" value="registro">');
            $('#form').unbind('submit').submit();
        });
    });
});

/*ANIMACIONES */
$(document).ready(function() {
    ScrollToInit();
    ActiveSectionNavigation();
    InitWaypointAnimations({
        offset: "60%",
        animateClass: "wp-animated",
        animateGroupClass: "wp-animated-group"
    });
    InitCounterWayPointAnimation();
  });
  function ScrollToInit() {
    $(document).on("click", "a[href^='#']", function(event) {
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: $($anchor.attr("href")).offset().top
        }, 1500, "easeInOutExpo");
        event.preventDefault();
    });
  }
  function ActiveSectionNavigation() {
    function getNavItemsMap() {
        const navItemsMap = $("#main-nav").find(".nav-item").map((index, item) => {
            const $item = $(item);
            const name = $item.find(".nav-link").attr("href").substring(1);
            return {
                key: name,
                val: $item
            };
        })
        .toArray()
        .reduce((map, obj) => {
            map[obj.key] = obj.val;
            return map;
        }, {});
  
        return navItemsMap;
    }
    function deactivateCurrentNavItem() {
        $("#main-nav").find(".nav-item.active").removeClass("active");
    }
    const navItemsMap = getNavItemsMap();
    $("section").each((index, element) => {
        const $element = $(element);
        const sectionName = $element.attr("id");
        if(sectionName in navItemsMap) {
            
            $element.waypoint((direction) => {
                if(direction === "down") {
                    deactivateCurrentNavItem();
                    navItemsMap[sectionName].addClass("active");
                }
            },{
                offset: "50%"
            });
            
            $element.waypoint((direction) => {
                if(direction === "up") {
                    deactivateCurrentNavItem();
                    navItemsMap[sectionName].addClass("active");
                }
            },{
                offset: "-20%"
            })
        }
    });
  }
  function InitCounterWayPointAnimation() {
    $('.counter').each(function () {
        var $this = $(this);
        var stop = parseInt($this.text().replace(/,/g, ""));
        $this.text(0);
        $this.waypoint(function (direction) {
            animateNumbers($this, 0, stop);
            this.destroy();
        },{
            triggerOnce: true,
            offset: "80%"
        });
    });  
  }
  function animateNumbers(element, start, stop, commas, duration, ease) {
    var $this = element;
    commas = (commas === undefined) ? true : commas;
    $({value: start}).animate({value: stop}, {
        duration: duration == undefined ? 4000 : duration,
        easing: ease == undefined ? "swing" : ease,
        step: function() {
            $this.text(Math.floor(this.value));
            if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
        },
        complete: function() {
           if (parseInt($this.text()) !== stop) {
               $this.text(stop);
               if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
           }
        }
    });
  }
  /* TERMINA ANIMACIONES */
/*CONTADOR */
var waypoint = new Waypoint({
    element: document.getElementById('basic-waypoint'),
    handler: function() {
      const counters = document.querySelectorAll('.value');
  const speed = 200;
  
  counters.forEach( counter => {
     const animate = () => {
        const value = +counter.getAttribute('akhi');
        const data = +counter.innerText;
       
        const time = value / speed;
       if(data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 1);
          }else{
            counter.innerText = value;
          }
       
     }
     
     animate();
  });
    }
  });
