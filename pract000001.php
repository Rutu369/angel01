5. A company stores an employee name using a C++ string object. The system appends the 
department name to the employee name and displays the modified string.
#include <iostream>
#include <string>
using namespace std;
int main()
{
 string empName, dept;
 cout << "Enter employee name: ";
 getline(cin, empName);
 cout << "Enter department: ";
 getline(cin, dept);
 empName.append(" - ");
 empName.append(dept);
 cout << "Updated employee record: " << empName;
 return 0;
}