require('./bootstrap');

import Global from './_global';

let global = new Global();

document.addEventListener("DOMContentLoaded", function (event) {
    global.initialize();
});

$(document).ready(function() {
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar').toggleClass('active');
  });
});

