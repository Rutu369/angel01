# Question: Write a Python code for Gauss Elimination method

import numpy as np

a = np.array([[2, -1, 3],
              [0,  1.5, -0.5],
              [0,  0,   0.66666667]], float)

b = np.array([9, 1.5, 2], float)
n = len(b)

# Forward elimination (matrix is already upper-triangular here,
# but code is written in general form)
for i in range(n - 1):
    for j in range(i + 1, n):
        if a[j, i] == 0:
            continue
        factor = a[j, i] / a[i, i]
        for k in range(i, n):
            a[j, k] = a[j, k] - a[i, k] * factor
        b[j] = b[j] - b[i] * factor

print('a=', a)
print('b=', b)

# Back substitution
x = np.zeros(n)
x[n - 1] = b[n - 1] / a[n - 1, n - 1]

for i in range(n - 2, -1, -1):
    s = 0
    for j in range(i + 1, n):
        s += a[i, j] * x[j]
    x[i] = (b[i] - s) / a[i, i]

print("x=", x)