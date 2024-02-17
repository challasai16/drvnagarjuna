
// side menu js 
let sidemenu = document.querySelector(".side-menu-nav");
let sidemenuIconbox = document.querySelector(".sidebar-linesbox");
let menuLine1 = document.querySelector(".line1");
let menuLine2 = document.querySelector(".line2");

sidemenuIconbox.addEventListener("click", ()=> {
    sidemenu.classList.toggle("side-menu-nav-manu");
    menuLine1.classList.toggle("span1-manu");
    menuLine2.classList.toggle("span2-manu");
});


// mobile menu starts here 

let mobileAboutBtn = document.querySelector(".mobile-about-btn");
let mobileSpecialityBtn = document.querySelector(".mobilespecility-btn");
let mobileSpecialityMenu = document.querySelector(".mobilespecility-menu");
let mobileaAboutMenu = document.querySelector(".mobileabout-menu");
let mobileMenuIconBox = document.querySelector(".mobile-iconbox");
let mobileMenu = document.querySelector(".mobile-menu-list");
let mobileIcon1 = document.querySelector(".m-line1");
let mobileIcon2 = document.querySelector(".m-line2");

mobileAboutBtn.addEventListener("click",()=> {
    mobileaAboutMenu.classList.toggle("mobileabout-menu-manu");
});
mobileSpecialityBtn.addEventListener("click", ()=> {
    mobileSpecialityMenu.classList.toggle("mobilespecility-menu-manu");
});

mobileMenuIconBox.addEventListener("click", ()=> {
    mobileMenu.classList.toggle("mobile-menu-list-manu");
    mobileIcon1.classList.toggle("m-line1-manu");
    mobileIcon2.classList.toggle("m-line2-manu");
})


    function showUrl() {
        let anchor = document.querySelector(".content-boxinter ul li");
        let currentPagUrl = document.baseURI;
        console.log(anchor);
        console.log(currentPagUrl);
    }
     showUrl();

// related content in interventional pulomonology starts here 



let relatedContent = document.querySelector(".content-boxinter1 ul");


 function changeContent() {
    relatedContent.innerHTML = "<li><a href='./ebus.php'>LINEAR Endobrochial Ultrasound (EBUS)</a></li><li><a href='./radial-ebus.php'>Radius Endobronchial Ultrasound(Radial Ebus)</a></li><li><a href='./cryobiopsy-for-peripheral-pulmonary-nodule.php'>Cryobiopsy for Peripheral Pulomonary Nodule</a></li><li><a href='./navigational-brochoscopy.php'>Navigational Bronchoscopy</a></li><li><a href='./trans-bronchial-lung-cryobiopsy.php'>Trans Bronchial Lung Cryobiospy</a></li><li><a href='./medical-theracoscopy.php'>Medical Thoracoscopy</a></li><li><a href='./airway-foreign-body-removal.php'>Airway Foreign Body Removal</a></li><li><a href='./brochoscopic-endobrochial-tumor-removal.php'>Bronchoscopic Endobronchial Tumor Removal</a></li><li><a href='./airway-stenting.php'>Airway Stenting</a></li><li><a href='./therapeutic-whole-lung-levage-for-pulmonary-alveolar-proteinosis.php'>Therapeutic Whole Lung Lavage For Pulmonary Alveolar Proteinosis</a></li><li><a href='./balloon-bronchoplasty.php'>Balloon Bronchoplasty</a></li><li><a href='./bronchoscopic-thermal-vapor-for-severe-emphysema.php'>Brochoscopic Thermal Vapor Ablation For Severe Emphysema</a></li><li><a href='./bronchoscopic-thermal-vapor-for-severe-emphysema.php'><li><a href='./bronchial-thermoplasty-for-refractory-asthma.php'>Brochoscopic Thermal Vapor Ablation For Severe Emphysema</a></li></a></li>";
 }
 changeContent();
 
 