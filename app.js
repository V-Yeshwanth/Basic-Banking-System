// Fixed-top
const x = document.getElementById('topnavbar');
    window.addEventListener('scroll', function(){
        const value = window.scrollY;
        if(value >= 133){
            x.classList.add('fixed-top');
        } else {
            x.classList.remove('fixed-top');
        }
    });

// Date
const footerdate = document.getElementById('date');

let currentDate = new Date().getFullYear();
footerdate.innerHTML = currentDate;

// Createuser Page
var gimage = document.getElementById('gimage');
        // console.log(gimage);
        var radio = document.querySelectorAll('.radio');
        radio.forEach(function(item){
            item.addEventListener('input', function(e){
                if(e.currentTarget.value === 'male'){
                   gimage.src = "Images/Male-Image.jpg";
                } else {
                    gimage.src = "Images/Female-Image.png";
                }
            });
        });
