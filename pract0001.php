3.  Write a program to Handle division by zero and negative number 
using multiple catch blocks. 
#include <iostream> 
using namespace std; 
int main() { 
int a = 10, b = 0; 
try { 
if (b == 0) 
throw 1; 
if (a < 0) 
throw 'a'; 
cout << a / b; 
} 
catch (int) { 
cout << "Division by zero"; 
} 
catch (char) { 
cout << "Negative number"; 
} 
return 0; 
}
