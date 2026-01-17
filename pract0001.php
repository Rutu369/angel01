<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
</head>
<body>

    <h2>Employee Details</h2>

    <!-- <pre> tag keeps text formatting -->
    <pre id="output"></pre>

    <script>
        // ES6 Class to represent an Employee
        class Employee {

            // Constructor initializes object properties
            constructor(id, name, position, salary) {
                this.id = id;               // Employee ID
                this.name = name;           // Employee Name
                this.position = position;   // Job Role
                this.salary = salary;       // Salary Amount
            }

            // Arrow function to return formatted employee details
            showDetails = () => {
                return `Employee ID: ${this.id}
Name: ${this.name}
Position: ${this.position}
Salary: ₹${this.salary}
-----------------------------`;
            };
        }

        // Creating employee objects
        const emp1 = new Employee(101, "Ravi", "Manager", 50000);
        const emp2 = new Employee(102, "Sneha", "Developer", 40000);
        const emp3 = new Employee(103, "Kiran", "Tester", 35000);

        // Array storing all employees
        const employees = [emp1, emp2, emp3];

        // Combine all employee details into one text
        let outputText = "";

        // Loop through each employee and append details
        for (let emp of employees) {
            outputText += emp.showDetails() + "\n";
        }

        // Display final output inside <pre> tag
        document.getElementById("output").textContent = outputText;
    </script>

</body>
</html>