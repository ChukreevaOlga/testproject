//import $ from 'jquery';
import '../css/index.css';
import $ from '../js/jquery.js';
console.log('jshjdj');
    $(".catalog__item:eq(2)").addClass('disabled');
    $('.catalog__item').click(function(){
        $(this).toggleClass('active');
    });
       