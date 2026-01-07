3. A school wants to store the marks of 3 students in 4 subjects. Write a C++ program to use 
a two-dimensional array to store the marks. The program should accept the marks from 
the user and display them in a table format.
#include<iostream>
using namespace std;
int main() {
 int marks[3][4];
 // Input marks
 cout << "Enter marks of 3 students in 4 subjects:\n";
 for(int i = 0; i < 3; i++) {
for(int j = 0; j < 4; j++) {
 cin >> marks[i][j];
}
 }
 // Display marks in table format
 cout << "\nMarks Table:\n";
 for(int i = 0; i < 3; i++) {
 for(int j = 0; j < 4; j++) {
 cout << marks[i][j] << "\t";
 }
 cout << endl;
 }
 return 0;
}