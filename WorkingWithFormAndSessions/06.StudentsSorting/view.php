<form method="get">
    <fieldset>
        <div>
            <table>
                <thead>
                <th>First Name:</th>
                <th>Last Name:</th>
                <th>Email:</th>
                <th>Exam score:</th>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" placeholder="First Name" name="firstName1"></td>
                    <td><input type="text" placeholder="Last Name" name="lastName1"></td>
                    <td><input type="text" placeholder="Email" name="email1"></td>
                    <td><input type="text" placeholder="Grade" name="grade1"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="First Name" name="firstName2"></td>
                    <td><input type="text" placeholder="Last Name" name="lastName2"></td>
                    <td><input type="text" placeholder="Email" name="email2"></td>
                    <td><input type="text" placeholder="Grade" name="grade2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="First Name" name="firstName3"></td>
                    <td><input type="text" placeholder="Last Name" name="lastName3"></td>
                    <td><input type="text" placeholder="Email" name="email3"></td>
                    <td><input type="text" placeholder="Grade" name="grade3"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </fieldset>
    <div>
        <label for="sortCriteria">
            Sort by:
        </label>
        <select name="sortCriteria" id="sortCriteria">
            <option value="firstName">First name</option>
            <option value="secondName">Second name</option>
            <option value="email">Email</option>
            <option value="grade">Grade</option>
        </select>
        <label for="order">
            Order:
        </label>
        <select name="order" id="order">
            <option value="asc">Ascending</option>
            <option value="desc">Descending </option>
        </select>
        <input type="submit" value="Submit" name="submit">
    </div>
</form>