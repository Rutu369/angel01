#include <iostream> 
#include <string> 
using namespace std; 
class Laptop  
{ 
public: 
int id; 
string brand; 
string processor; 
int ram; 
float price; 
// Function to input data 
void getData() 
{ 
cout << "Enter Laptop ID: "; 
cin >> id; 
cout << "Enter Brand Name: "; 
cin >> brand; 
cout << "Enter Processor Type: "; 
cin >> processor; 
cout << "Enter RAM (GB): "; 
cin >> ram; 
        cout << "Enter Price: "; 
        cin >> price; 
    } 
 
    // Function to display data 
    void display()  
{ 
        cout << id << "\t" << brand << "\t" 
             << processor << "\t\t" 
             << ram << "GB\t" 
             << price << endl;      // /t create spacing or column 
    } 
}; 
 
int main()  
{ 
    int n; 
    cout << "Enter number of laptops: "; 
    cin >> n; 
 
    Laptop l[n];     //array of Laptop objects ,Each element stores one laptop’s details 
 
    // Input laptop details 
    for (int i = 0; i < n; i++)  
  { 
        cout << "\nEnter details of Laptop " << i + 1 << endl; 
        l[i].getData(); 
     } 
 
    // Display all laptops 
    cout << "\nAll Laptop Records:\n"; 
    cout << "ID\tBrand\tProcessor\tRAM\tPrice\n";  //Prints heading for table 
    for (int i = 0; i < n; i++)   
   { 
        l[i].display();    // calls display function for every laptop 
    } 
 
    // Display laptops with price less than 50000 
    cout << "\nLaptops with price less than 50000:\n"; 
    cout << "ID\tBrand\tProcessor\tRAM\tPrice\n"; 
    for (int i = 0; i < n; i++)  
   { 
        if (l[i].price < 50000) { 
l[i].display(); 
} 
} 
// Search by brand 
string searchBrand; 
cout << "\nEnter brand to search: "; 
cin >> searchBrand; 
cout << "\nLaptops of brand " << searchBrand << ":\n"; 
cout << "ID\tBrand\tProcessor\tRAM\tPrice\n"; 
for (int i = 0; i < n; i++)  
{
if (l[i].brand == searchBrand)  
{
l[i].display(); 
}
}
return 0; 
}
