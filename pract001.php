2. A school wants to store the marks of 5 students that are already known. Write a C++ 
program to initialize an array with these marks and display them on the screen. Use 
appropriate loops and clearly show the marks of all students.
#include<iostream>
using namespace std;
int main() {
 int marks[5] = {78, 85, 90, 67, 88};
 cout << "Marks of students are:\n";
 for(int i = 0; i < 5; i++) {
 cout << "Student " << i + 1 << ": " << marks[i] << endl;
 }
 return 0;
}