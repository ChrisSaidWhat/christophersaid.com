class BankAccount {

    /*
        class name: BankAccount
        purpose: provide the fundamental functionality and structure for setting up a bank account
        author: Christopher Said
        date: 12/02/2023
    */

    //  properties
    accountBalance;
    accountName;
    accountNumber;

    //  constructor
    constructor(inBalance) {
        this.accountBalance = inBalance;
        this.accountName = "";
        this.accountNumber = 0;
    }

    //  getters and setters
    setAccountBalance(inBalance) {
        this.accountBalance = inBalance;
    }

    getAccountBalance() {
        return this.accountBalance;
    }

    setAccountName(inName) {
        this.accountName = inName;
    }

    getAccountName() {
        return this.accountName;
    }

    setAccountNumber(inNumber) {
        this.accountNumber = inNumber;
    }

    getAccountNumber() {
        return this.accountNumber;
    }

    //  processing functions
    deposit(addAmt) {
        this.accountBalance += addAmt;
    }

    withdraw(subAmt) {
        this.accountBalance -= subAmt;
    }

    balance() {
        return this.accountBalance.toFixed(2);
    }

    accountInfo() {
        let acctInfo = [this.accountName, this.accountNumber, this.accountBalance.toFixed(2)];
        return acctInfo;
    }

}