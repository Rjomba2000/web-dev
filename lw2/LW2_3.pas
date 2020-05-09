PROGRAM HelloName(INPUT, OUTPUT);
USES
  DOS;
VAR
  InputString, Name: STRING;
  Count: INTEGER;
BEGIN
  WRITELN('Content-type: text/plain');
  WRITELN;
  InputString := GetEnv('QUERY_STRING');
  IF POS('name=', InputString) = 1
  THEN
    BEGIN
      IF POS('&', InputString) > 0
      THEN
        Count := INTEGER(POS('&', InputString)) - 6;
      ELSE
        Count := LENGTH(InputString) - 5;
      Name := COPY(InputString, 6, Count);
      WRITELN('Hello dear ', Name, '!')
    END
  ELSE
    WRITELN('Hello Anonymous')
END.
