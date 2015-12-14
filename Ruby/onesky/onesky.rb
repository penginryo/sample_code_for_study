require 'onesky'

# Create client
client = Onesky::Client.new('public key', 'secret key')

project_id =
project = client.project(project_id)
resp = JSON.parse(project.show)
p resp['data']

download_dir_path = ''
post_dir_path = ''
# extension = '*.properties'
files = Array.new
num_of_files = 0
locale = []


##################
# send files
##################
Dir.foreach(post_dir_path) do |file|
  next if file == '.' or file == '..'
  files.push(file)
  num_of_files += 1
end

puts "Found #{num_of_files} files in #{post_dir_path} directory"
for current_file in 0...num_of_files do
  resp = project.upload_file(file: post_dir_path + files[current_file], file_format: '')
  puts "Sent #{files[current_file]}"
end


##################
# download files
##################
for current_locale in 0...locale.size do
  puts "\nStart downloading '#{locale[current_locale]}' locale files\n\n"

  for current_file in 0...num_of_files do

    resp = project.export_translation(source_file_name: files[current_file], locale: locale[current_locale])
    dl_file_name = ""

    lang_dir_path = download_dir_path + locale[current_locale] + '/'

    # create directories for each language if not exist
    FileUtils.mkdir_p(lang_dir_path) unless FileTest.exist?(lang_dir_path)

    # insert a locale name (e.g _de) before .
    (lang_dir_path + files[current_file]).each_char do |chr|
      dl_file_name += '_' + locale[current_locale] if chr == '.'
      dl_file_name += chr
    end

    # start downloading selected locale files, if already exists then overrites them
    File.open(dl_file_name, 'a') do |file|
      file.write(resp);
      puts "Downloaded #{dl_file_name}"
      dl_file_name = ""
    end
  end
end
