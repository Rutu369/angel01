7. Write a Python program to express a vector as a linear combination of
vectors

import sympy as sp
A = [1, 1, 1, 1]
B = [1, 2, 3, 2]
C = [2, 5, 6, 4]
M = [3, 3, 5, 4]
v1 = sp.Matrix(A).reshape(4,1)
v2 = sp.Matrix(B).reshape(4,1)
v3 = sp.Matrix(C).reshape(4,1)
v = sp.Matrix(M).reshape(4,1)
Mat = sp.Matrix.hstack(v1, v2, v3)
solution = Mat.gauss_jordan_solve(v)[0]
c1, c2, c3 = solution
print("Coefficients:")
print("c1 =", c1, "c2 =", c2, "c3 =", c3)

Coefficients:
c1 = 2 c2 = 3 c3 = -1
