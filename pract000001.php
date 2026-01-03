5. Write a program to handle array index out of bound. 
#include <iostream> 
using namespace std; 
int main() { 
int arr[3] = {10, 20, 30}; 
int index = 5; 
try { 
if (index >= 3) 
throw "Index out of bound"; 
cout << arr[index]; 
} 
catch (const char* msg) { 
cout << msg; 
} 
return 0; 
}
