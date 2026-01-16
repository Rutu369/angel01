#include <iostream> 
using namespace std; 
// Abstract Base Class 
class Account { 
protected: 
int accountNumber; 
double balance; 
public: 
Account(int accNo, double bal) { 
accountNumber = accNo; 
balance = bal; 
} 
// Pure virtual function (Abstraction + Virtual Function) 
virtual void calculateInterest() = 0; 
void display() { 
cout << "Account Number: " << accountNumber << endl; 
cout << "Balance: " << balance << endl; 
} 
}; 
// Derived Class 1 
class SavingsAccount : public Account { 
public: 
SavingsAccount(int accNo, double bal) : Account(accNo, bal) {} 
// Function Overriding 
void calculateInterest() { 
cout << "Savings Account Interest: " << balance * 0.04 << endl; 
} 
}; 
// Derived Class 2 
class CurrentAccount : public Account { 
public: 
CurrentAccount(int accNo, double bal) : Account(accNo, bal) {} 
// Function Overriding 
void calculateInterest() { 
cout << "Current Account has no interest." << endl; 
} 
}; 
int main() { 
Account* acc; 
SavingsAccount s(101, 5000); 
CurrentAccount c(102, 8000); 
acc = &s; 
acc->display(); 
acc->calculateInterest(); 
cout << endl; 
acc = &c; 
acc->display(); 
acc->calculateInterest(); 
return 0; 
} 
