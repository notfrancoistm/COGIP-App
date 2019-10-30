<form>
    <h3>New invoice</h3>

    <div class="row">
        <div class="col">
            <label for="">Invoice number</label><br/>
            <input type="number" class="form-control" placeholder="Invoice number">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="">Invoice date</label><br/>
            <input type="date" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="company">Company</label><br/>
            <select class="form-control" name="company" alt="" value="k">
                <?php require '' ?>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="contact">Contact person regarding the invoice</label><br/>
            <select class="form-control" name="contact" alt="" value="l">
            <?php require '' ?>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Create invoice</button>
</form>

