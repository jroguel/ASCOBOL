      ******************************************************************
      * Author:
      * Date:
      * Purpose:
      * Tectonics: cobc
      ******************************************************************
       IDENTIFICATION DIVISION.
       PROGRAM-ID. YOUR-PROGRAM-NAME.
       DATA DIVISION.
       FILE SECTION.

       WORKING-STORAGE SECTION.
       01 StudentName  PIC X(6)    VALUE ZEROS.
       01 OtherName    PIC X(3)    VALUE "Tom".
       01 ShopTotal    PIC 9(5)V99 VALUE 534.75.

       PROCEDURE DIVISION.
       MAIN-PROCEDURE.
            DISPLAY "Student Name ", StudentName.
            DISPLAY "Other Name ", OtherName.
            DISPLAY "Shop Total ", ShopTotal.
            MOVE "John" TO StudentName.
            DISPLAY "My name is ", StudentName.
            MOVE OtherName TO StudentName.
            MOVE ZEROS TO ShopTotal.
            MOVE ALL "-" TO StudentName.
            DISPLAY "Student Name ", StudentName.
            DISPLAY "Other Name ", OtherName.
            DISPLAY "Shop Total ", ShopTotal.
            STOP RUN.

       END PROGRAM YOUR-PROGRAM-NAME.
