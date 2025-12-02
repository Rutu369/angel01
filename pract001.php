#include <iostream>
using namespace std;

class Person {
public:
    // 1. Print only name
    void printDetails(string name) {
        cout << "Name: " << name << endl;
    }

    // 2. Print name and age
    void printDetails(string name, int age) {
        cout << "Name: " << name << ", Age: " << age << endl;
    }

    // 3. Print name, age and city
    void printDetails(string name, int age, string city) {
        cout << "Name: " << name << ", Age: " << age << ", City: " << city << endl;
    }
};

int main() {
    Person p;

    p.printDetails("Ramesh");
    p.printDetails("Ramesh", 25);
    p.printDetails("Ramesh", 25, "Mumbai");

    return 0;
}