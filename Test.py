def addTwoNumbers(l1, l2):
        b = 0
        a = len(l1) - 1
        for i in range(len(l1)):
            b = b*10 + l1[a]
            a -= 1

        c = 0
        d = len(l2) - 1
        for i in range(len(l2)):
            c = c*10 + l2[d]
            d -= 1

        sum = b + c
        l3 = []
        if len(l1)>len(l2):
            n = len(l1) + 1
        else:
            n = len(l2) + 1

        for i in range(len(l1)):
                l3.append(sum%10)
                sum = sum//10
        
        return l3

print(addTwoNumbers([2,4,3], [5,6,4]))