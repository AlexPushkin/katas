import re


def find():
    with open('weather.dat') as datfile:
        found = False
        min_spare = 99999
        min_day = 0
        for line in datfile:
            line_data = re.sub('\s{2,}', ' ', line).split(' ')
            if len(line_data) > 3 and line_data[1].isdigit() and line_data[2].isdigit() and line_data[3].isdigit():
                spare = int(line_data[2]) - int(line_data[3])
                if spare < min_spare:
                    found = True
                    min_spare = spare
                    min_day = int(line_data[1])

        if found:
            print(min_day, min_spare)
        else:
            print('no day')


find()
