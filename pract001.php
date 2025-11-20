#include <iostream>
#include <string>
using namespace std;
class Book {
private:
    string title;
    double price;
public:
    Book() {
        title = "Untitled";
        price = 0.0;
    }
    Book(string t) {
        title = t;
        price = 0.0;
    }
    Book(string t, double p) {
        title = t;
        price = p;
    }
    void display() {
        cout << "Title: " << title << endl;
        cout << "Price: " << price << endl;
    }
};
int main() {
    Book b1;                    
    Book b2("C++ Programming"); 
    Book b3("Data Structures", 450.50);
    cout << "Book 1 Details:\n";
    b1.display();
    cout << "\nBook 2 Details:\n";
    b2.display();
    cout << "\nBook 3 Details:\n";
    b3.display();
    return 0;
}
