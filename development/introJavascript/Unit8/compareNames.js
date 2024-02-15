function compareNames() {

    //  the code is used to clear any previous validation messages that may have been displayed.
    
    document.querySelector("#validationMsg").innerHTML = "";
    document.querySelector("#displayResult").innerHTML = "";

    let value1 = document.querySelector("#value1").value;

    /* this line is converting the value of `value1` to lowercase using the `toLowerCase()` method.
    this is useful for case-insensitive comparisons, as it ensures that any
    input entered by the user will be treated as lowercase, regardless of the original casing. */

    value1 = value1.toLowerCase();  //  problem 3

    let value2 = document.querySelector("#value2").value;

    value2 = value2.toLowerCase();  //  problem 3

    // the line `let comparisonResult = value1.localeCompare(value2);` is comparing two strings

    let comparisonResult = value1.localeCompare(value2);

    // this code block is checking if either `value1` or `value2` is empty

    if (value1.length === 0 || value2.length === 0) {

      document.querySelector("#validationMsg").innerHTML = "TWO NAMES MUST BE ENTERED!";

    }
    else {

      // the code block is checking the value of the variable `comparisonResult`
      // if `comparisonResult` is equal to 0, it means that the two names entered by the user are the same
      // this code is responsible for displaying the result of the name comparison to the user

      if (comparisonResult == 0) {
        document.querySelector("#displayResult").innerHTML = "Same";
      }
      else {
        document.querySelector("#displayResult").innerHTML = "Different";
      } //  problem 4

    }   //  problem 5

  } //  problem 1

  function resetFields() {

    document.querySelector("#validationMsg").innerHTML = "";
    document.querySelector("#displayResult").innerHTML = "";

  } //  problem 7