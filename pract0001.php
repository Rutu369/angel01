#include <iostream> 
#include <string> 
using namespace std; 
class Student { 
private: 
int rollNumber; 
string name; 
float marks1, marks2, marks3; 
float average; 
char grade; 
public: 
// Function to read student details 
void readData() { 
cout << "Enter Roll Number: "; 
cin >> rollNumber; 
cin.ignore(); 
cout << "Enter Name: "; 
getline(cin, name); 
cout << "Enter Marks in Subject 1: "; 
cin >> marks1; 
cout << "Enter Marks in Subject 2: "; 
cin >> marks2; 
cout << "Enter Marks in Subject 3: "; 
cin >> marks3; 
} 
// Function to calculate grade 
void calculateGrade() { 
average = (marks1 + marks2 + marks3) / 3; 
if (average >= 90) 
grade = 'A'; 
else if (average >= 75) 
grade = 'B'; 
else if (average >= 60) 
grade = 'C'; 
else 
grade = 'D'; 
} 
// Function to display details 
void display() { 
cout << "\n--- Student Details ---\n"; 
cout << "Roll Number : " << rollNumber << endl; 
cout << "Name        : " << name << endl; 
cout << "Average     : " << average << endl;
cout << "Grade       : " << grade << endl;
} 
}; 
int main() { 
Student s; 
s.readData(); 
s.calculateGrade(); 
s.display(); 
return 0; 
}
