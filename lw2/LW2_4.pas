PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Ind: BYTE;
  QString, ResultStr: STRING;
BEGIN
  QString := GetEnv('QUERY_STRING');
  ResultStr := '';
  Ind := POS(Key, QString);
  IF Ind <> 1
  THEN
    Ind := POS('&' + Key, QString);
  IF Ind <> 0
  THEN
    BEGIN
      IF Ind = 1
      THEN
        Ind := Ind + LENGTH(Key)
      ELSE
        Ind := Ind + LENGTH(Key) + 1;
      WHILE (Ind <> LENGTH(QString)) AND (QString[Ind + 1] <> '&')
      DO
        BEGIN
          Ind := Ind + 1;
          ResultStr := ResultStr + QString[Ind]
        END
     END
   ELSE
     ResultStr := 'No parameters with this name';
   GetQueryStringParameter := ResultStr
END;

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
