4. A small coaching institute wants to store the marks of 5 students in a subject. Write a 
C++ program to store the marks, accept input from the user, and display the stored marks.
Functional Requirements:
• Create a class named StudentMarks.
• Declare an integer array inside the class to store marks of 5 students.
• Include a member function named inputMarks() to accept the marks from the user.
• Include a member function named displayMarks() to display the stored marks.
• In the main() function, create an object of the class and use it to call inputMarks() and 
displayMarks().
#include <iostream>
using namespace std;
class StudentMarks
{
 int marks[5];
public:
 void inputMarks()
 {
 cout << "Enter marks of 5 students:\n";
 for (int i = 0; i < 5; i++)
 {
 cin >> marks[i];
 }
 }
 void displayMarks()
 {
 cout << "\nMarks of students are:\n";
for (int i = 0; i < 5; i++)
 {
 cout << marks[i] << endl;
 }
 }
};
int main()
{
 StudentMarks sm;
 sm.inputMarks();
 sm.displayMarks();
 return 0;
}