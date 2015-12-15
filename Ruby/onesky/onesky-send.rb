require 'onesky'

# Create client
client = Onesky::Client.new('public key', 'secret key')

project_id = 
project = client.project(project_id)
resp = JSON.parse(project.show)

file_list = Array.new
path_reference_file = ''

File.open(path_reference_file).each do |line|
  file_name = line.match(/=(.+)\n/)
  file_list.push(file_name[1])
end

# ##################
# # send files
# ##################
puts "Found #{file_list.size} files\nStart Sending files to OneSky server...\n"
for current_file in 0...file_list.size do
  resp = project.upload_file(file: file_list[current_file], file_format: 'JAVA_PROPERTIES', is_keeping_all_strings: false)
  puts "Sent #{file_list[current_file]}..."
end
