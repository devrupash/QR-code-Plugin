
import apiFetch from '@wordpress/api-fetch';
import { Button } from '@wordpress/components';
function PostView() {
	const handleSubmit = (e) => {
		e.preventDefault();
		const formData = new FormData(e.target);
		let formValues = Object.fromEntries(formData.entries());
	};
	return (
		<div>
			<form onSubmit={handleSubmit}>
				<table className="form-table">
					<tbody>
						<tr>
							<th scope="row">
								<label className="label">Heading</label>
							</th>
							<td>
								<input type="text" name="heading" />
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label className="label">Checkbox</label>
							</th>
							<td>
								<label>
									<input type="checkbox" name="checkbox" />
									Show/Hide
								</label>
							</td>
						</tr>
						<tr>
							<th></th>
							<td><Button type="submit" variant="primary">Update</Button></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	)
}
export default PostView;