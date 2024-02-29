!function(u){"use strict";u(document).ready(function(){const e=document.querySelectorAll(".alpha-only");e.forEach(function(e){e.addEventListener("input",function(e){var s=this.value;/^[a-zA-Z ]*$/.test(s)||(this.value=s.replace(/[^a-zA-Z ]/g,""))})}),u(".alpha-only").click(function(){u(this).attr("id")});var c=[["c2","c3","c4","c5","c6","c7","c8","c9"],["g3","g4","g5","g6","g7","g8","g9","g10"],["j8","j9","j10","j11","j12","j13","j14","j15","j16","j17"],["k2","k3","k4","k5","k6"],["m1","m2","m3","m4"]],o=[["a7","b7","c7","d7"],["c9","d9","e9","f9","g9","h9","i9","j9","k9","l9"],["d12","e12","f12","g12","h12","i12","j12"],["e16","f16","g16","h16","i16","j16","k16","l16"],["f4","g4","h4","i4","j4","k4","l4","m4"]],i="",t=(u(".alpha-only").on("click",function(){for(var e=u(this).attr("id"),s=0;s<c.length;s++)if(c[s].includes(e)){i="across";break}for(var n=0;n<o.length;n++)if(o[n].includes(e)){i="down";break}}),!1);function l(e){var s="";return e.forEach(function(e){e=u("#"+e).val();s+=e||""}),s}u(".alpha-only").on("keydown",function(e){t=8===e.which||46===e.which}),u(".alpha-only").on("input",function(){if(!t)for(var e,s=u(this).attr("id"),n="across"===i?c:o,r=0;r<n.length;r++)if(n[r].includes(s)){if(n[r].indexOf(s)<n[r].length-1){for(var a=n[r].indexOf(s)+1;a<n[r].length;a++)if(""===u("#"+n[r][a]).val().trim())return void u("#"+n[r][a]).focus()}else if(r<n.length-1)return e=n[r-1].indexOf(s),void u("#"+n[r+1][e]).focus();break}}),u("#crosswordForm").click(function(e){e.preventDefault();var s,a,c,n,r,e=u("#email").val(),o=u("#username").val(),i=!0,t=[];u(".alpha-only").each(function(){u(this).val().trim()||(i=!1,t.push(u(this).attr("id")))}),i?((s=[]).push(l(["c2","c3","c4","c5","c6","c7","c8","c9"])),s.push(l(["g3","g4","g5","g6","g7","g8","g9","g10"])),s.push(l(["j8","j9","j10","j11","j12","j13","j14","j15","j16","j17"])),s.push(l(["k2","k3","k4","k5","k6"])),s.push(l(["m1","m2","m3","m4"])),s.push(l(["a7","b7","c7","d7"])),s.push(l(["c9","d9","e9","f9","g9","h9","i9","j9","k9","l9"])),s.push(l(["d12","e12","f12","g12","h12","i12","j12"])),s.push(l(["e16","f16","g16","h16","i16","j16","k16","l16"])),s.push(l(["f4","g4","h4","i4","j4","k4","l4","m4"])),a={answer1:"Innovate",answer2:"Teamwork",answer3:"Leadership",answer4:"Adapt",answer5:"Risk",answer6:"Goal",answer7:"Experiment",answer8:"Failure",answer9:"Learning",answer10:"Feedback"},c=[],s.forEach(function(e,s){var n=a["answer"+(s+1)],r=e.toUpperCase()===n.toUpperCase()?"correct":"wrong",s={question:"Question "+(s+1),input:e,"correct-answer":n,"your-answer":e.toUpperCase(),status:r};c.push(s)}),n=JSON.stringify(c),u.ajax({type:"POST",url:"formsubmit.php",data:{name:o,email:e,response:n},success:function(e){var r,a;u('input[type="text"]').prop("disabled",!0),"true"===e?(console.log("Puzzle data stored successfully!"),u(".banner-hide-after-submit").css("display","none"),u(".banner-after-submit").css("display","block"),u("#hide-after-submit").css("display","none"),u(".puzzle-h2").css("display","none"),u(".puzzle-h2").css("display","none"),u(".play-rule").css("display","none"),u("#crosswordForm").css("display","none"),u(".after-submit").css("display","block"),r=0,a=JSON.parse(n),[["c2","c3","c4","c5","c6","c7","c8","c9"],["g3","g4","g5","g6","g7","g8","g9","g10"],["j8","j9","j10","j11","j12","j13","j14","j15","j16","j17"],["k2","k3","k4","k5","k6"],["m1","m2","m3","m4"],["a7","b7","c7","d7"],["c9","d9","e9","f9","g9","h9","i9","j9","k9","l9"],["d12","e12","f12","g12","h12","i12","j12"],["e16","f16","g16","h16","i16","j16","k16","l16"],["f4","g4","h4","i4","j4","k4","l4","m4"]].forEach(function(e,s){var n=a[s];"correct"===n.status&&r++,n?e.forEach(function(e){e=u("#"+e);"correct"===n.status?(e.css("border","2px solid green"),e.css("background","#4BB10B")):(e.css("border","2px solid red"),e.css("background","#EF5353"))}):console.error("Response item not found for word at index",s)}),u("#marks").text(r)):console.log("Failed to store puzzle data.")},error:function(e,s,n){console.error("Error:",n)}}),r=!1,u('[id^="clue"]').each(function(e){var s=a["answer"+(e+1)];c[e].input.toUpperCase()===s.toUpperCase()?(u(this).css("display","flex"),u(this).css("color","#4BB10B"),r=!0):(u(this).css("display","flex"),u(this).css("color","#EF5353"))}),r||u('[id^="clue"]').css("color","#EF5353")):alert("Please fill in all the blanks.")})})}.call(window,window.jQuery);