xampp:
	docker run --name myXampp -p 41061:22 -p 41062:80 -d -v $(shell pwd):/www tomsik68/xampp:8
