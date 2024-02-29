!function ($) { 
  "use strict";

  $(document).ready(function () {
      const alphaOnly = document.querySelectorAll(".alpha-only");
          alphaOnly.forEach(function (element) {
          element.addEventListener("input", function (event) {
              var value = this.value;
              if (!/^[a-zA-Z ]*$/.test(value)) {
              this.value = value.replace(/[^a-zA-Z ]/g, "");
              }
          });
      });


      var inpID;
      $('.alpha-only').click(function() {
          inpID = $(this).attr('id');
      });

var answerSetsAcross = [
    ['c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9'],
    ['g3', 'g4', 'g5', 'g6', 'g7', 'g8', 'g9', 'g10'],
    ['j8', 'j9', 'j10', 'j11', 'j12', 'j13', 'j14', 'j15', 'j16', 'j17'],
    ['k2', 'k3', 'k4', 'k5', 'k6'],
    ['m1', 'm2', 'm3', 'm4']
];

var answerSetsDown = [
    ['a7', 'b7', 'c7', 'd7'],
    ['c9', 'd9', 'e9', 'f9', 'g9', 'h9', 'i9', 'j9', 'k9', 'l9'],
    ['d12', 'e12', 'f12', 'g12', 'h12', 'i12', 'j12'],
    ['e16', 'f16', 'g16', 'h16', 'i16', 'j16', 'k16', 'l16'],
    ['f4', 'g4', 'h4', 'i4', 'j4', 'k4', 'l4', 'm4']
];


var direction = '';

// Add click event listener to all input fields with the class 'alpha-only'
$('.alpha-only').on('click', function() {
    var currentId = $(this).attr('id');

    for (var i = 0; i < answerSetsAcross.length; i++) {
        if (answerSetsAcross[i].includes(currentId)) {
            direction = 'across';
            break;
        }
    }
    for (var j = 0; j < answerSetsDown.length; j++) {
        if (answerSetsDown[j].includes(currentId)) {
            direction = 'down';
            break;
        }
    }
    
});
var isBackspaceOrDeletePressed = false;

$('.alpha-only').on('keydown', function(event) {
    // Check if the pressed key is backspace or delete
    if (event.which === 8 || event.which === 46) {
        isBackspaceOrDeletePressed = true; 
    } else {
        isBackspaceOrDeletePressed = false;
    }
});

// Add input event listener to all input fields with the class 'alpha-only'
$('.alpha-only').on('input', function() {
    if (!isBackspaceOrDeletePressed) {
        var currentId = $(this).attr('id');

        var answerSets = (direction === 'across') ? answerSetsAcross : answerSetsDown;

        for (var i = 0; i < answerSets.length; i++) {
            if (answerSets[i].includes(currentId)) {
                if (answerSets[i].indexOf(currentId) < answerSets[i].length - 1) {
                    for (var j = answerSets[i].indexOf(currentId) + 1; j < answerSets[i].length; j++) {
                        if ($('#' + answerSets[i][j]).val().trim() === '') {
                            $('#' + answerSets[i][j]).focus();
                            return; 
                        }
                    }
                } else {
                    if (i < answerSets.length - 1) {
                        var prevIndex = answerSets[i - 1].indexOf(currentId);
                        $('#' + answerSets[i + 1][prevIndex]).focus();
                        return; 
                    }
                }
                break;
            }
        }
    }
});

      // Click event listener for the form submission
      $('#crosswordForm').click(function(e) {
          e.preventDefault();
          

          // Get hidden input values
          var userEmail = $('#email').val();
          var userName = $('#username').val();

          // Validate all input fields
          var isValid = true;
          var emptyFields = []; 
          $('.alpha-only').each(function() {
              if (!$(this).val().trim()) {
                  isValid = false;
                  emptyFields.push($(this).attr('id')); 
              }
          });
      
          // If any input field is empty, display an error message and return
          if (!isValid) {
              var errorMessage = 'Please fill in all the blanks.';
              alert(errorMessage);
              return;
          }

          // Join the letters from input fields corresponding to the specified questions into words
          var words = [];
            words.push(joinLetters(['c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9'])); 
            words.push(joinLetters(['g3', 'g4', 'g5', 'g6', 'g7', 'g8', 'g9', 'g10'])); 
            words.push(joinLetters(['j8', 'j9', 'j10', 'j11', 'j12', 'j13', 'j14','j15','j16','j17'])); 
            words.push(joinLetters(['k2', 'k3', 'k4', 'k5', 'k6'])); 
            words.push(joinLetters(['m1', 'm2', 'm3', 'm4'])); 
            words.push(joinLetters(['a7', 'b7', 'c7', 'd7'])); 
            words.push(joinLetters(['c9', 'd9', 'e9', 'f9', 'g9','h9', 'i9', 'j9', 'k9', 'l9'])); 
            words.push(joinLetters(['d12', 'e12', 'f12', 'g12', 'h12', 'i12', 'j12'])); 
            words.push(joinLetters(['e16', 'f16', 'g16', 'h16', 'i16', 'j16', 'k16', 'l16'])); 
            words.push(joinLetters(['f4', 'g4', 'h4', 'i4', 'j4', 'k4', 'l4', 'm4']));  

          // Define correct answers for each question
          var correctAnswers = {
              answer1: 'Innovate',
              answer2: 'Teamwork',
              answer3: 'Leadership',
              answer4: 'Adapt',
              answer5: 'Risk',
              answer6: 'Goal',
              answer7: 'Experiment',
              answer8: 'Failure',
              answer9: 'Learning',
              answer10: 'Feedback'
          };

          // Array to store response
          var response = [];

          // Iterate over each word and check against correct answers
          words.forEach(function(word, index) {
              var questionKey = 'answer' + (index + 1);
              var correctAnswer = correctAnswers[questionKey];

              // Check if user input matches the correct answer (case-insensitive)
              var status = (word.toUpperCase() === correctAnswer.toUpperCase()) ? 'correct' : 'wrong';
              var inputResponse = {
                  'question': 'Question ' + (index + 1),
                  'input': word,
                  'correct-answer': correctAnswer,
                  'your-answer': word.toUpperCase(),
                  'status': status
              };

              response.push(inputResponse);
          });

          var responseData = JSON.stringify(response);

          $.ajax({
                type: 'POST',
                url: 'formsubmit.php',
                data: {
                        name: userName,   
                        email: userEmail,     
                        response: responseData    
                },
                success: function(response) {
                    // Check if data was successfully stored in the database
                    $('input[type="text"]').prop('disabled', true);
                    if (response === 'true') {
                            console.log('Puzzle data stored successfully!');
                            $('.banner-hide-after-submit').css('display', 'none');
                            $('.banner-after-submit').css('display', 'block');
                            $('#hide-after-submit').css('display', 'none');
                            $('.puzzle-h2').css('display', 'none');
                            $('.puzzle-h2').css('display', 'none');
                            $('.play-rule').css('display', 'none');
                            $('#crosswordForm').css('display', 'none');
                            $('.after-submit').css('display', 'block');
                        
                            var correctCount = 0;
                            var responseData1 = JSON.parse(responseData);

                            var words = [
                                ['c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9'],      
                                ['g3', 'g4', 'g5', 'g6', 'g7', 'g8', 'g9', 'g10'],     
                                ['j8', 'j9', 'j10', 'j11', 'j12', 'j13', 'j14', 'j15', 'j16', 'j17'], 
                                ['k2', 'k3', 'k4', 'k5', 'k6'],                        
                                ['m1', 'm2', 'm3', 'm4'],                               
                                ['a7', 'b7', 'c7', 'd7'],                               
                                ['c9', 'd9', 'e9', 'f9', 'g9', 'h9', 'i9', 'j9', 'k9', 'l9'],  
                                ['d12', 'e12', 'f12', 'g12', 'h12', 'i12', 'j12'],     
                                ['e16', 'f16', 'g16', 'h16', 'i16', 'j16', 'k16', 'l16'],      
                                ['f4', 'g4', 'h4', 'i4', 'j4', 'k4', 'l4', 'm4']         
                            ];

                            // Iterate through each word
                            words.forEach(function (word, index) {
                                var responseItem = responseData1[index]; 
                                if (responseItem.status === 'correct') {
                                    correctCount++; 
                                }

                                // Loop through each input ID
                                if (responseItem) {
                                    word.forEach(function (inpID) {
                                        var letterElement = $('#' + inpID); 
                                        if (responseItem.status === 'correct') {
                                            letterElement.css('border', '2px solid green');
                                            letterElement.css('background', '#4BB10B');
                                        } else {
                                            letterElement.css('border', '2px solid red');
                                            letterElement.css('background', '#EF5353');
                                        }
                                    });
                                } else {
                                    console.error('Response item not found for word at index', index);
                                }
                            });

                            // Update HTML content
                            $('#marks').text(correctCount);

                    } else {
                            console.log('Failed to store puzzle data.');
                    }
                },
                error: function(xhr, status, error) {
                        console.error('Error:', error);
                }
          });

        var correctAnswerFound = false;

$('[id^="clue"]').each(function(index) {
    var questionKey = 'answer' + (index + 1); 
    var correctAnswer = correctAnswers[questionKey]; 
    var userAnswer = response[index].input.toUpperCase(); 

    // Check if user's answer matches the correct answer
    if (userAnswer === correctAnswer.toUpperCase()) {
        $(this).css('display', 'flex');
        $(this).css('color', '#4BB10B');
        correctAnswerFound = true; 
    } else {
        $(this).css('display', 'flex');
        $(this).css('color', '#EF5353');
    }
});

if (!correctAnswerFound) {
    $('[id^="clue"]').css('color', '#EF5353');
}



      });

      // Function to join letters from input fields into a word
      function joinLetters(inputIds) {
          var word = '';
          inputIds.forEach(function(inputId) {
              var letter = $('#' + inputId).val();
              word += letter ? letter : '';
          });
          return word;
      }

      });
  
}.call(window, window.jQuery);  


