2. Write a program to Create a class where the constructor throws an 
exception if marks exceed 100. 
#include <iostream> 
using namespace std; 
class Student { 
public: 
Student(int marks) { 
if (marks > 100) 
throw "Invalid marks"; 
cout << "Student created"; 
} 
}; 
int main() { 
try { 
Student s(120); 
} 
catch (const char* msg) { 
cout << msg; 
} 
return 0; 
} 
