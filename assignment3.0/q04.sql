SELECT pmkStudentId, fldFirstName, fldLastName FROM tblCourses INNER JOIN tblEnrolls ON pmkCourseID = fnkCourseID INNER JOIN tblStudents ON pmkStudentId = fnkStudentId WHERE fldDepartment='CS' AND fldCourseNumber=148 ORDER BY pmkStudentId, fldLastName, fldFirstName;