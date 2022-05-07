copy ghy.xls e:\webcom\scada\data\ghy.csv
copy bng.xls e:\webcom\scada\data\bng.csv
copy btk.xls e:\webcom\scada\data\btk.csv
copy hsm.xls e:\webcom\scada\data\hsm.csv
copy mdt.xls e:\webcom\scada\data\mdt.csv
copy slg.xls e:\webcom\scada\data\slg.csv
copy gspl.xls e:\webcom\scada\data\gspl.csv
c:
cd c:\program files\mysql\mysql server 5.5\bin\
mysql --user=root --password=gspl < e:\webcom\scada\data\t.sql