class AddInfoToUsers < ActiveRecord::Migration[5.2]
  def change
    add_column :users, :nickname, :string
    add_column :users, :student_id, :text
    add_column :users, :baekjoon_id, :string
    add_column :users, :codeforce_id, :string
    add_column :users, :uva_id, :string
    add_column :users, :info, :text
  end
end
