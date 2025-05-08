# Ad0e702ExerciseEavRepository
An AD0-E702 certification exercise module: use an EAV repository to load, filter, and sort entities.

If you visit the equivalent URL in your local machine:

https://ad0-e702.local/repository/product/

you will see the following output in the 2columns-right layout's main window:

```
2025-05-08 09:18:40

1 | 24-MB01

2 | 24-MB04

3 | 24-MB03

4 | 24-MB05

5 | 24-MB06

6 | 24-MB02

7 | 24-UB02

8 | 24-WB01

9 | 24-WB02

10 | 24-WB05

repository searchResult->getTotalCount() = 1891 products
```

If you add a page as follows, you will go to that page of the search results:

https://ad0-e702.local/repository/product/?p=2

```
2025-05-08 12:21:15

1 | 24-WB06

2 | 24-WB03

3 | 24-WB07

4 | 24-WB04

5 | 24-UG06

6 | 24-UG07

7 | 24-UG04

8 | 24-UG02

9 | 24-UG05

10 | 24-UG01

repository searchResult->getTotalCount() = 1891 products

current page: 2
