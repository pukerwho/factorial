$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

let mobileMenu = document.querySelector('.mobile_menu');
let mobileMenuCover = document.querySelector('.mobile_menu_cover');
mobileMenu.addEventListener('click', function(){
  this.classList.toggle('active');
  mobileMenuCover.classList.toggle('active');
})


let sidebarLi = document.querySelectorAll('.menu li');
for (li of sidebarLi) {
  liString = li.innerText;
  liLetter = liString.charAt(0);
  beforeLi = document.createElement('div');
  beforeLi.innerHTML = liLetter;
  li.insertBefore(beforeLi, null);
}

var clipboard = new ClipboardJS('.copy_link');

clipboard.on('success', function(e) {
  let copyId = e.trigger.id;
  let copySuccess =  document.querySelector('.success_'+copyId+'');
  copySuccess.classList.add('active');
  setTimeout(function(){
    copySuccess.classList.remove('active');
  }, 1000);
});

let links_url = document.querySelectorAll('.link_url');
for (link_url of links_url) {
  let linkUrlId = link_url.getAttribute('data-link-url');
  let file = document.querySelector('.file[data-link-file='+linkUrlId+']');
  let imgFile = file.querySelector('img');
  let a = link_url.getAttribute('href');
  parts = a.split('.');

  //вот тут баг, массив не обходит
  if (parts.includes('xlsx', 'xls')) {
    file.classList.add('exel');
    console.log('exel');
  } else if (parts.includes('docx', 'doc')) {
    file.classList.add('doc');
    console.log('doc');
  } else if (parts.includes('pdf')) {
    file.classList.add('pdf');
    console.log('pdf');
  }
  

}