
const selects = document.querySelectorAll('.select-head');
const options = document.querySelectorAll('.option');
const show_btns = document.querySelectorAll('.show-btn');
const show_btns_two = document.querySelectorAll('.show-btn2');

selects.forEach(select => {
    select.addEventListener('click', () => {
        select.parentElement.classList.toggle('showSelect')
    })
})

options.forEach(option => {
    option.addEventListener('click', () => {
        option.parentElement.parentElement.classList.remove('showSelect');
        option.parentElement.previousElementSibling.children[1].textContent = option.textContent
    })
});

document.addEventListener('click', (e) => {
    selects.forEach(select => {
        select.parentElement.contains(e.target) || select.parentElement.classList.remove('showSelect')
    })
});

show_btns.forEach(btn => {
    btn.addEventListener('click', () => {
        btn.parentElement.parentElement.parentElement.classList.toggle('showInfo')
    })
});
show_btns_two.forEach(btn => {
    btn.addEventListener('click', () => {
        btn.parentElement.parentElement.parentElement.parentElement.classList.toggle('showInfo')
    })
});


$(document).ready(function() {
    $('.tab-box').hide();
    $('.tab-box:last-child').show();
    $('.tab-btn').click(function() {
      let pageInfo = $(this).attr('data-tab');
      $('.tab-box').hide();
      $('.' + pageInfo).show();
    })
  });