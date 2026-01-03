4. Write a program to Show how to handle an exception safely inside a 
destructor. 
#include <iostream> 
using namespace std; 
class Test { 
public: 
~Test() { 
try { 
throw "Error in destructor"; 
} 
catch (const char* msg) { 
cout << msg; 
} 
} 
}; 
int main() { 
Test t; 
return 0; 
}
