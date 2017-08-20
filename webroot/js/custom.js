$(document).ready(function() {
    "use strict";	
    $('#home_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#home_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#home_enquiry').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess_qe");
                foo.attr("style", "display: block;");
                $("#home_enquiry").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#tbook_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#tbook_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#hbook_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#hbook_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
	
	//LEFT MOBILE MENU OPEN
    $(".mob-menu-icon").on('click', function() {
        $(".mob-menu-slide").css("right", "0");
		$(".btn-close-menu").css("display", "inline-block");
    });

    //LEFT MOBILE MENU CLOSE
    $(".btn-close-menu").on('click', function() {
        $(".mob-menu-slide").css("right", "-240px");
        $(".btn-close-menu").css("display", "none");
    });
	
    $('.map-container').on('click', function() {
        $(this).find('iframe').addClass('clicked')
    }).on('mouseleave', function() {
        $(this).find('iframe').removeClass('clicked')
    });
	
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });
	
	$('select').material_select();	
	
  $('#select-city.autocomplete').autocomplete({
    data: {
      "New York": null,
      "California": null,
      "Illinois": null,
	  "Texas": null,
	  "Pennsylvania": null,
	  "San Diego": null,
	  "Los Angeles": null,
	  "Dallas": null,
	  "Austin": null,
	  "Columbus": null,
	  "Charlotte": null,
	  "El Paso": null,
	  "Portland": null,
	  "Las Vegas": null,
	  "Oklahoma City": null,
	  "Milwaukee": null,
	  "Tucson": null,
	  "Sacramento": null,
	  "Long Beach": null,
	  "Oakland": null,
	  "Arlington": null,
	  "Tampa": null,
	  "Corpus Christi": null,
	  "Greensboro": null,
	  "Jersey City": null
    },
    limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
  
  $('#select-search.autocomplete').autocomplete({
    data: {
      "Top Honeymoon Packages in India": 'img/icon/7.png',
	  "Family Package": 'img/icon/8.png',
	  "World Tour Package": 'img/icon/9.png',
	  "Hill Stations": 'img/icon/10.png',
	  "America Holidays": 'img/icon/11.png',
	  "Germany Holidays": 'img/icon/12.png',
	  "Hong Kong Holidays": 'img/icon/13.png',
	  "Europe Holidays": 'img/icon/14.png',
	  "France Holidays": 'img/icon/15.png',
	  "Switzerland,Bali,Thailand Package": 'img/icon/16.png',
	  "Maldives,Malaysia,Pattaya Package": 'img/icon/17.png',
	  "Dubai Packages": 'img/icon/18.png',
	  "Europe Tour Packages": 'img/icon/19.png',
	  "USA Tour Packages": 'img/icon/20.png',
	  "Mexico City, Mexico": 'img/icon/21.png',
	  "Seoul, South Korea": 'img/icon/22.png',
	  "Ljubljana, Slovenia": 'img/icon/23.png',
	  "Wroclaw, Poland": 'img/icon/24.png',
	  "Nashville, USA": 'img/icon/25.png',
	  "Amsterdam, the Netherlands": 'img/icon/26.png',
	  "First World Hotel": 'img/icon/27.png',
	  "MGM Grand Las Vegas Hotel": 'img/icon/28.png',
	  "CityCenter": 'img/icon/29.png',
	  "Holiday Hotel Inn": 'img/icon/13.png',
	  "Tour and Travel Packages": 'img/icon/14.png',
	  "City Seight Seeings": 'img/icon/15.png'	  
    },
    limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });  
		
});

function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}