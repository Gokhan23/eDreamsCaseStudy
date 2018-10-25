# Case Study

## Getting Started
Welcome to my case study! I had fun while doing it, I hope you will also have same feeling. On this project I used codeception framework for both api and acceptance tests.



### Prerequisites
Please be sure that `java` and `composer` installed already. 

You will also need [selenium standalone server](https://www.seleniumhq.org/download/) and [chrome driver](http://chromedriver.chromium.org/downloads) 

### Installing

Run this command in the project folder:`composer install`

Then open another terminal, go to command line and give the paths for chrome driver and selenium; 

```
java -Dwebdriver.chrome.driver=PATH/TO/CHROME_DRIVER -jar PATH/TO/SELENIUM.jar
```

## Task 1

To run api tests and see the results, please run this command in the project folder

```
vendor\bin\codecept run api --steps
```

To get more details add `--debug` parameter


## Task 2

Running automation tests

Please run this command in the project folder

```
vendor\bin\codecept run acceptance --steps --html report.html
```

***We expect 2 test pass and 1 test fail ( due to 500 exception )***

Report file will be generated under the `_output` folder.

If you want to run single test just add one more param  `--group groupname` 

You will find group names in beginning of the test cases.


## Task 3

```
SELECT COUNT(*) as numberofemp, e.gender
FROM employees.employees as e
INNER JOIN employees.dept_manager as dm ON dm.emp_no = e.emp_no
LEFT JOIN employees.departments as d ON dm.dept_no = d.dept_no
LEFT JOIN employees.salaries as s ON dm.emp_no = s.emp_no
INNER JOIN employees.titles as t ON dm.emp_no = t.emp_no
WHERE d.dept_name='Quality Management'
AND s.salary > 50000
AND s.to_date > DATE_SUB(NOW(), INTERVAL 1 MONTH) #It was saying past month in case study, If I really look into past month for from_date colum, I would get no results.
AND t.title = 'manager'
GROUP BY e.gender;
```



