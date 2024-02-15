/* 
    definition and description of the class

    student class will describe the information about a DMACC student 
        the function will process the student information for the applications 

*/

class Student {
    
    //  1. information

    //  class name: Student
    //  describes the information and processing for a DMACC student
    //  author: Christopher Said
    //  date: 11/20/2023

    //  2. properties

    studentName;
    studentAddress;
    studentDOB;
    #studentID;

    //  public (available directly and outside the object), private (available only to the class, #), protected - access modifiers

    //  3. constructors

    constructor() {
        //  empty constructor - no parameters, often sets default values to the properties of a new object
        this.studentAddress = "";
        this.studentDOB = "";
        this.studentName = "";
        this.#studentID = 0;
    }

    //  assigns the initial values of the new object, does NOT create a new object, keyword new CREATES a new object
    //  in other languages the name of the constructor is the same name as the class, not in JavaScript, only one constructor allowed (no overloading of methods)
    //  typically treat all as public and hope for the best

    //  4. setters and getters

    setStudentAddress(inAddress) {
        this.studentAddress = inAddress; 
    }

    getStudentAddress() {
        return this.studentAddress;
    }

    setStudentID(inID) {
        this.studentID = inID;
    }

    getStudentID() {
        return this.#studentID;
    }

    setStudentName(inName) {
        this.studentName = inName;
    }

    getStudentName() {
        return this.studentName;
    }

    //  formal name - accessors and mutators 
    //  one each for every property in your class
    //  setter takes an input value and assigns it to a property of the object
    //  getter returns the value of the property of an object

    //  5. processing functions

    formatStudentInfo() {
        return this.studentName + ": " + this.#studentID;
    }

    //  ie. calculateGPA() (based on the use case)
    //  all functions should be listed alphabetically for code readability

}   //  end of Student class