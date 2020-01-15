<div class="row">
    <form method="post">
        <div class="form-control">
            <label>OrderDate</label>
            <input type="date" name="orderNumber">
        </div>
        <div class="form-control">
            <label>Status</label>
            <select name="status" id="">
                <option value="watting">watting</option>
                <option value="paid">paid</option>
                <option value="">shiping</option>
            </select>
        </div>
        <div class="form-control">
            <label>Comments</label>
            <input type="text" name="comments">
        </div>
        <div class="form-control">
            <label>CustomerNumber</label>
            <input type="text" name="customerNumber">
        </div>
        <input type="submit" value="add">
    </form>
</div>
